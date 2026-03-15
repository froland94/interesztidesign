<?php

declare(strict_types=1);

use App\Enums\Locale;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

foreach (Locale::values() as $locale) {
    Route::prefix($locale === Locale::HUNGARIAN->value ? '' : $locale)
        ->name("$locale.")
        ->group(function () use ($locale): void {
            Route::get('/', [HomeController::class, 'index'])->name('home');

            // Localized Cookie Policy based on app locale
            Route::get(trans('routes.cookies', locale: $locale), function () {
                return view('cookies');
            })->name('cookies');

            // Localized Privacy Policy based on app locale
            Route::get(trans('routes.privacy', locale: $locale), function () {
                return view('privacy');
            })->name('privacy');
        });
}
