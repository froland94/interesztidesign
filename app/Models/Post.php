<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    use HasTranslations;

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('posts'));
        static::deleted(fn () => Cache::forget('posts'));
    }

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'is_published',
        'published_at',
    ];

    public $translatable = [
        'title',
        'slug',
        'excerpt',
    ];

    protected function casts(): array
    {
        return [
            'content' => 'array',
            'is_published' => 'boolean',
            'published_at' => 'date',
        ];
    }
}
