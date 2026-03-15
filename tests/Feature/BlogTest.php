<?php

declare(strict_types=1);

use App\Enums\Locale;
use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Livewire;

$hu = Locale::HUNGARIAN->value;
$en = Locale::ENGLISH->value;

// --- Blog listing ---

it('shows blog listing page', function (): void {
    Post::factory()->count(3)->create();

    $this->get('/blog')
        ->assertStatus(200);
});

it('only shows published posts on listing', function () use ($hu, $en): void {
    Post::factory()->create([
        'is_published' => true,
        'title' => [$hu => 'Közzétett cikk', $en => 'Published article'],
        'excerpt' => [$hu => 'Kivonat', $en => 'Excerpt'],
        'slug' => [$hu => 'kozzetett-cikk', $en => 'published-article'],
    ]);

    Post::factory()->unpublished()->create([
        'title' => [$hu => 'Piszkozat', $en => 'Draft'],
        'excerpt' => [$hu => 'Nem jelenik meg', $en => 'Should not show'],
        'slug' => [$hu => 'piszkozat', $en => 'draft'],
    ]);

    $this->get('/blog')
        ->assertStatus(200)
        ->assertSee('Közzétett cikk')
        ->assertDontSee('Piszkozat');
});

it('shows blog listing in english', function () use ($hu, $en): void {
    Post::factory()->create([
        'is_published' => true,
        'title' => [$hu => 'Magyar cím', $en => 'English title'],
        'excerpt' => [$hu => 'Kivonat', $en => 'Excerpt'],
        'slug' => [$hu => 'magyar-cim', $en => 'english-title'],
    ]);

    $this->get('/en/blog')
        ->assertStatus(200)
        ->assertSee('English title');
});

// --- Blog detail ---

it('shows blog detail by hungarian slug', function () use ($hu, $en): void {
    Post::factory()->create([
        'is_published' => true,
        'title' => [$hu => 'Teszt bejegyzés', $en => 'Test post'],
        'excerpt' => [$hu => 'Kivonat', $en => 'Excerpt'],
        'slug' => [$hu => 'teszt-bejegyzes', $en => 'test-post'],
        'content' => [
            ['type' => 'text', 'data' => ['content' => [$hu => '<p>Magyar szöveg</p>', $en => '<p>English text</p>']]],
        ],
    ]);

    $this->get('/blog/teszt-bejegyzes')
        ->assertStatus(200)
        ->assertSee('Teszt bejegyzés')
        ->assertSee('Magyar szöveg');
});

it('shows blog detail by english slug', function () use ($hu, $en): void {
    Post::factory()->create([
        'is_published' => true,
        'title' => [$hu => 'Teszt bejegyzés', $en => 'Test post'],
        'excerpt' => [$hu => 'Kivonat', $en => 'Excerpt'],
        'slug' => [$hu => 'teszt-bejegyzes', $en => 'test-post'],
        'content' => [
            ['type' => 'text', 'data' => ['content' => [$hu => '<p>Magyar szöveg</p>', $en => '<p>English text</p>']]],
        ],
    ]);

    $this->get('/en/blog/test-post')
        ->assertStatus(200)
        ->assertSee('Test post')
        ->assertSee('English text');
});

it('returns 404 for unpublished post', function () use ($hu, $en): void {
    Post::factory()->unpublished()->create([
        'title' => [$hu => 'Piszkozat', $en => 'Draft'],
        'excerpt' => [$hu => 'Kivonat', $en => 'Excerpt'],
        'slug' => [$hu => 'piszkozat', $en => 'draft'],
    ]);

    $this->get('/blog/piszkozat')
        ->assertStatus(404);
});

it('returns 404 for unknown slug', function (): void {
    $this->get('/blog/nem-letezik')
        ->assertStatus(404);
});

// --- Cache ---

it('clears posts cache on post save', function (): void {
    Cache::put('posts', collect([]), 60);
    expect(Cache::has('posts'))->toBeTrue();

    Post::factory()->create();

    expect(Cache::has('posts'))->toBeFalse();
});

it('clears posts cache on post delete', function (): void {
    $post = Post::factory()->create();
    Cache::put('posts', collect([]), 60);
    expect(Cache::has('posts'))->toBeTrue();

    $post->delete();

    expect(Cache::has('posts'))->toBeFalse();
});

// --- Filament admin ---

it('admin can view post list', function (): void {
    $admin = User::factory()->create(['is_admin' => true]);

    Livewire::actingAs($admin)
        ->test(ListPosts::class)
        ->assertSuccessful();
});

it('admin can create a post', function () use ($hu, $en): void {
    $admin = User::factory()->create(['is_admin' => true]);

    Livewire::actingAs($admin)
        ->test(CreatePost::class)
        ->fillForm([
            "title.{$hu}" => 'Új bejegyzés',
            "slug.{$hu}" => 'uj-bejegyzes',
            "excerpt.{$hu}" => 'Rövid leírás',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas('posts', [
        'slug' => json_encode([$hu => 'uj-bejegyzes', $en => null]),
    ]);
});
