<?php

declare(strict_types=1);

use App\Enums\Locale;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('{locale?}')
    ->whereIn('locale', Locale::values())
    ->group(function (): void {
        Route::get('/', [ProductController::class, 'index'])->name('home');

        // Localized Cookie Policy based on app locale
        Route::get(__('routes.cookies'), function () {
            return view('cookies');
        })->name('cookies');

        // Localized Privacy Policy based on app locale
        Route::get(__('routes.privacy'), function () {
            return view('privacy');
        })->name('privacy');
    });
