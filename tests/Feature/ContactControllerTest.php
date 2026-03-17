<?php

declare(strict_types=1);

use App\Mail\ContactFormMail;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

beforeEach(function (): void {
    Mail::fake();
    Cache::flush();
});

it('submits contact form successfully and sets submitted flag', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('phoneCountry', 'HU')
        ->set('phoneNumber', '301234567')
        ->set('property', 'Budapest, IV. kerület, 60m², 3 szoba')
        ->set('services', [$product->id])
        ->set('description', 'Rövid leírás az igényekről.')
        ->set('privacy', true)
        ->call('submit')
        ->assertSet('submitted', true)
        ->assertHasNoErrors();
});

it('sends mail to the configured contact email on successful submission', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('property', 'Budapest, IV. kerület, 60m², 3 szoba')
        ->set('services', [$product->id])
        ->set('privacy', true)
        ->call('submit');

    Mail::assertSent(ContactFormMail::class, function (ContactFormMail $mail): bool {
        return $mail->hasTo(config('contact.email'));
    });
});

it('fails validation when required fields are missing', function (): void {
    Livewire::test('contact-form')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'property', 'services', 'privacy']);
});

it('fails validation with invalid email format', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'nem-email')
        ->set('property', 'Budapest')
        ->set('services', [$product->id])
        ->set('privacy', true)
        ->call('submit')
        ->assertHasErrors(['email']);
});

it('fails validation with an invalid phone number for the given country', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('phoneCountry', 'HU')
        ->set('phoneNumber', '123')
        ->set('property', 'Budapest')
        ->set('services', [$product->id])
        ->set('privacy', true)
        ->call('submit')
        ->assertHasErrors(['phoneNumber']);
});

it('succeeds without a phone number', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('property', 'Budapest')
        ->set('services', [$product->id])
        ->set('privacy', true)
        ->call('submit')
        ->assertSet('submitted', true)
        ->assertHasNoErrors();
});

it('fails validation when no service is selected', function (): void {
    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('property', 'Budapest')
        ->set('privacy', true)
        ->call('submit')
        ->assertHasErrors(['services']);
});

it('fails validation when privacy checkbox is not accepted', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('property', 'Budapest')
        ->set('services', [$product->id])
        ->call('submit')
        ->assertHasErrors(['privacy']);
});

it('resets form fields after successful submission', function (): void {
    $product = Product::factory()->create(['is_active' => true]);

    Livewire::test('contact-form')
        ->set('name', 'Teszt Elek')
        ->set('email', 'teszt@example.com')
        ->set('property', 'Budapest')
        ->set('services', [$product->id])
        ->set('privacy', true)
        ->call('submit')
        ->assertSet('name', '')
        ->assertSet('email', '')
        ->assertSet('services', [])
        ->assertSet('privacy', false);
});
