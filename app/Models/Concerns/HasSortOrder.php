<?php

declare(strict_types=1);

namespace App\Models\Concerns;

trait HasSortOrder
{
    protected static function bootHasSortOrder(): void
    {
        static::creating(function (self $model): void {
            if ($model->sort_order === null) {
                $model->sort_order = (int) static::max('sort_order') + 1;
            }
        });
    }
}
