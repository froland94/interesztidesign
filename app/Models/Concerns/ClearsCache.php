<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Cache;

trait ClearsCache
{
    protected static function bootClearsCache(): void
    {
        $key = (new static)->getTable();
        static::saved(fn () => Cache::forget($key));
        static::deleted(fn () => Cache::forget($key));
    }
}
