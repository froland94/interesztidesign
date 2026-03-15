<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    protected static function booted(): void
    {
        static::creating(function (Product $product): void {
            if ($product->sort_order === null) {
                $product->sort_order = (int) static::max('sort_order') + 1;
            }
        });

        static::saved(fn () => Cache::forget('products'));
        static::deleted(fn () => Cache::forget('products'));
    }

    protected $fillable = [
        'tag',
        'title',
        'description',
        'includes',
        'price',
        'cta_text',
        'sort_order',
        'is_active',
    ];

    public $translatable = [
        'tag',
        'title',
        'description',
        'includes',
        'price',
        'cta_text',
    ];

    protected function casts(): array
    {
        return [
            'includes' => 'array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
