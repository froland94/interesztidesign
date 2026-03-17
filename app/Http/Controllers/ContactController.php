<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use libphonenumber\PhoneNumberFormat;
use Propaganistas\LaravelPhone\PhoneNumber;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $phone = null;
        if (filled($validated['phone_number'] ?? null)) {
            $phone = (new PhoneNumber($validated['phone_number'], $validated['phone_country'] ?? 'HU'))
                ->format(PhoneNumberFormat::INTERNATIONAL);
        }

        $serviceIds = $validated['services'] ?? [];
        $serviceNames = Product::query()
            ->whereIn('id', $serviceIds)
            ->pluck('title')
            ->toArray();

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $phone,
            'property' => $validated['property'],
            'services' => $serviceNames,
            'description' => $validated['description'] ?? null,
        ];

        dispatch(function () use ($data): void {
            Mail::to(config('contact.email'))->send(new ContactFormMail($data));
        })->afterResponse();

        return redirect(url()->previous().'#'.__('nav.anchors.contact'))
            ->with('contact_success', true);
    }
}
