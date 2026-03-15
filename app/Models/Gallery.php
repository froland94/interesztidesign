<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected static function booted(): void
    {
        static::creating(function (Gallery $gallery): void {
            if ($gallery->sort_order === null) {
                $gallery->sort_order = (int) static::max('sort_order') + 1;
            }
        });

        static::saving(function (Gallery $gallery): void {
            if ($gallery->image) {
                $gallery->alt = pathinfo($gallery->image, PATHINFO_FILENAME);
            }
        });

        static::saved(fn () => Cache::forget('galleries'));
        static::deleted(fn () => Cache::forget('galleries'));
    }

    protected $fillable = [
        'image',
        'alt',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
