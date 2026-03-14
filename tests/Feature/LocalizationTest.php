<?php

declare(strict_types=1);

it('returns 200 for root (Hungarian)', function (): void {
    $this->get('/')
        ->assertStatus(200)
        ->assertSee('Süti tájékoztató');
});

it('shows Hungarian cookie policy at correct path (without /hu)', function (): void {
    $this->get('/suti-tajekoztato')
        ->assertStatus(200)
        ->assertSee('Süti tájékoztató')
        ->assertSee('Szolgáltatások');
});

it('shows English cookie policy at correct path', function (): void {
    $this->get('/en/cookie-policy')
        ->assertStatus(200)
        ->assertSee('Cookie Policy')
        ->assertSee('Services');
});

it('returns 404 for old Hungarian prefix /hu', function (): void {
    $this->get('/hu/suti-tajekoztato')
        ->assertStatus(404);
});

it('returns 404 for Hungarian path with English prefix', function (): void {
    $this->get('/en/suti-tajekoztato')
        ->assertStatus(404);
});
