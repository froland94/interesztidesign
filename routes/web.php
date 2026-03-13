<?php

declare(strict_types=1);

use App\Enums\Locale;
use Illuminate\Support\Facades\Route;

Route::prefix('{locale?}')
    ->whereIn('locale', Locale::values())
    ->group(function (): void {
        Route::view('/', 'welcome')->name('home');
    });
