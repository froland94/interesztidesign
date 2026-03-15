<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaveThemeRequest;
use Illuminate\Http\JsonResponse;

class ThemeController extends Controller
{
    public function save(SaveThemeRequest $request): JsonResponse
    {
        $request->user()->update(['theme_mode' => $request->validated('theme')]);

        return response()->json(['ok' => true]);
    }
}
