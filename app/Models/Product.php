<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\ClearsCache;
use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use ClearsCache;
    use HasFactory;
    use HasSortOrder;
    use HasTranslations;

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
