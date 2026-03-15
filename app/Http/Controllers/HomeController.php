<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Cache::rememberForever('products', fn () => Product::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get());

        $galleries = Cache::rememberForever('galleries', fn () => Gallery::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get());

        return view('home', compact('products', 'galleries'));
    }
}
