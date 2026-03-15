<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\ClearsCache;
use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use ClearsCache;
    use HasFactory;
    use HasSortOrder;

    protected $table = 'galleries';

    protected static function booted(): void
    {
        static::saving(function (Gallery $gallery): void {
            if ($gallery->image) {
                $gallery->alt = pathinfo($gallery->image, PATHINFO_FILENAME);
            }
        });
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
