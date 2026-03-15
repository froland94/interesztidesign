<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\ThemeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function (): void {
    Route::post('/admin/save-theme', [ThemeController::class, 'save'])->name('admin.save-theme');
});
