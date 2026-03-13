<?php

declare(strict_types=1);

test('returns a successful response', function (): void {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('returns a successful response in english', function (): void {
    $response = $this->get('/en');

    $response->assertStatus(200);
});
