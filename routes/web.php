<?php

declare(strict_types=1);

use App\Enums\Locale;
use Illuminate\Support\Facades\Route;

Route::prefix('{locale?}')
    ->whereIn('locale', Locale::values())
    ->group(function (): void {
        Route::view('/', 'home')->name('home');

        // Localized Cookie Policy based on app locale
        Route::get(__('routes.cookies'), function () {
            return view('cookies');
        })->name('cookies');
    });
