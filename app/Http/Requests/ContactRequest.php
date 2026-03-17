<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Propaganistas\LaravelPhone\Rules\Phone;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone_country' => ['nullable', 'string', 'size:2'],
            'phone_number' => ['nullable', 'string', (new Phone)->country($this->input('phone_country', 'HU'))],
            'property' => ['required', 'string', 'max:1000'],
            'services' => ['required', 'array', 'min:1'],
            'services.*' => ['integer', 'exists:products,id'],
            'description' => ['nullable', 'string', 'max:5000'],
            'privacy' => ['accepted'],
        ];
    }

    protected function failedValidation(Validator $validator): never
    {
        throw new ValidationException(
            $validator,
            redirect(url()->previous().'#'.__('nav.anchors.contact'))
                ->withInput($this->input())
                ->withErrors($validator, $this->errorBag)
        );
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => __('contact.validation.name_required'),
            'email.required' => __('contact.validation.email_required'),
            'email.email' => __('contact.validation.email_invalid'),
            'phone_number.phone' => __('contact.validation.phone_invalid'),
            'property.required' => __('contact.validation.property_required'),
            'services.required' => __('contact.validation.services_required'),
            'services.min' => __('contact.validation.services_required'),
            'privacy.accepted' => __('contact.validation.privacy_required'),
        ];
    }
}
