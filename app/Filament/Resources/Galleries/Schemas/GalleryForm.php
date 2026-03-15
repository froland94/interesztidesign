<?php

declare(strict_types=1);

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label(__('admin/common.image'))
                    ->columnSpanFull()
                    ->disk('galleries')
                    ->directory('')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->required(),
            ]);
    }
}
