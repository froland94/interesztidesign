<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\ClearsCache;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use ClearsCache;

    /** @use HasFactory<PostFactory> */
    use HasFactory;

    use HasTranslations;

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
