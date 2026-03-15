<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\Locale;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Cache::rememberForever('posts', fn () => Post::query()
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->get());

        return view('blog.index', compact('posts'));
    }

    public function show(string $slug): View
    {
        $post = Post::query()
            ->where('is_published', true)
            ->where('slug->'.app()->getLocale(), $slug)
            ->firstOrFail();

        view()->share('localeSwitcherParams', [
            Locale::HUNGARIAN->value => ['slug' => $post->getTranslation('slug', Locale::HUNGARIAN->value)],
            Locale::ENGLISH->value => ['slug' => $post->getTranslation('slug', Locale::ENGLISH->value)],
        ]);

        return view('blog.show', compact('post'));
    }
}
