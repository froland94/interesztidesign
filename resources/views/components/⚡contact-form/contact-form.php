<?php

declare(strict_types=1);

use App\Mail\ContactFormMail;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use libphonenumber\PhoneNumberFormat;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Propaganistas\LaravelPhone\PhoneNumber;
use Propaganistas\LaravelPhone\Rules\Phone;

new class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phoneCountry = 'HU';

    public string $phoneNumber = '';

    public string $property = '';

    /** @var array<int, int|string> */
    public array $services = [];

    public string $description = '';

    public bool $privacy = false;

    public bool $submitted = false;

    /**
     * @return Collection<int, Product>
     */
    #[Computed]
    public function products(): Collection
    {
        return Cache::rememberForever('products', fn () => Product::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get());
    }

    /**
     * @return array<string, mixed>
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phoneCountry' => ['nullable', 'string', 'size:2'],
            'phoneNumber' => ['nullable', 'string', (new Phone)->country($this->phoneCountry ?: 'HU')],
            'property' => ['required', 'string', 'max:1000'],
            'services' => ['required', 'array', 'min:1'],
            'services.*' => ['integer', 'exists:products,id'],
            'description' => ['nullable', 'string', 'max:5000'],
            'privacy' => ['accepted'],
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function messages(): array
    {
        return [
            'name.required' => __('contact.validation.name_required'),
            'email.required' => __('contact.validation.email_required'),
            'email.email' => __('contact.validation.email_invalid'),
            'phoneNumber.phone' => __('contact.validation.phone_invalid'),
            'property.required' => __('contact.validation.property_required'),
            'services.required' => __('contact.validation.services_required'),
            'services.min' => __('contact.validation.services_required'),
            'privacy.accepted' => __('contact.validation.privacy_required'),
        ];
    }

    public function updated(string $property): void
    {
        $this->resetValidation($property);
    }

    public function submit(): void
    {
        $this->validate();

        $phone = null;
        if (filled($this->phoneNumber)) {
            $phone = (new PhoneNumber($this->phoneNumber, $this->phoneCountry ?: 'HU'))
                ->format(PhoneNumberFormat::INTERNATIONAL);
        }

        $serviceNames = Product::query()
            ->whereIn('id', $this->services)
            ->pluck('title')
            ->toArray();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $phone,
            'property' => $this->property,
            'services' => $serviceNames,
            'description' => filled($this->description) ? $this->description : null,
        ];

        dispatch(function () use ($data): void {
            try {
                Mail::to(config('contact.email'))->send(new ContactFormMail($data));
            } catch (Throwable $e) {
                Log::error('Contact form email failed', ['error' => $e->getMessage(), 'data' => $data]);
            }
        })->afterResponse();

        $this->reset(['name', 'email', 'phoneNumber', 'property', 'services', 'description', 'privacy']);
        $this->phoneCountry = 'HU';
        $this->submitted = true;
    }
};
