<?php

declare(strict_types=1);

use App\Enums\Locale;

test('values returns all locale codes', function (): void {
    expect(Locale::values())->toBe(['hu', 'en']);
});

test('cases returns all locale enum instances', function (): void {
    expect(Locale::cases())->toBe([Locale::HUNGARIAN, Locale::ENGLISH]);
});

test('locale values match expected strings', function (): void {
    expect(Locale::HUNGARIAN->value)->toBe('hu')
        ->and(Locale::ENGLISH->value)->toBe('en');
});
