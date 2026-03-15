<?php

declare(strict_types=1);

use App\Enums\Locale;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

$hu = Locale::HUNGARIAN->value;
$en = Locale::ENGLISH->value;

beforeEach(fn () => Cache::flush());

it('shows the home page in hungarian', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertViewIs('home');
});

it('shows the home page in english', function (): void {
    $this->get('/en')
        ->assertOk()
        ->assertViewIs('home');
});

it('shows active gallery items on the home page', function (): void {
    $active = Gallery::factory()->create(['image' => 'active-item.webp']);
    Gallery::factory()->inactive()->create(['image' => 'inactive-item.webp']);

    Cache::forget('galleries');

    $this->get('/')
        ->assertSee('active-item')
        ->assertDontSee('inactive-item');
});

it('hides gallery section when no active gallery items exist', function (): void {
    Gallery::factory()->inactive()->count(3)->create();

    $this->get('/')
        ->assertOk()
        ->assertDontSee('gallery-masonry-grid');
});

it('shows active products on the home page', function () use ($hu, $en): void {
    $active = Product::factory()->create([
        'is_active' => true,
        'title' => [$hu => 'Aktív termék', $en => 'Active product'],
    ]);

    $inactive = Product::factory()->create([
        'is_active' => false,
        'title' => [$hu => 'Inaktív termék', $en => 'Inactive product'],
    ]);

    Cache::forget('products');

    $this->get('/')
        ->assertSee('Aktív termék')
        ->assertDontSee('Inaktív termék');
});
