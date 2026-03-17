<?php

declare(strict_types=1);

namespace App\Filament\Resources\Galleries\Pages;

use App\Filament\Resources\Galleries\GalleryResource;
use App\Models\Gallery;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('images')
                    ->label(__('admin/galleries.image_upload'))
                    ->columnSpanFull()
                    ->disk('galleries')
                    ->directory('')
                    ->visibility('public')
                    ->multiple()
                    ->image()
                    ->required(),
            ]);
    }

    protected function handleRecordCreation(array $data): Model
    {
        $images = $data['images'] ?? [];
        $first = array_shift($images);

        $record = Gallery::create(['image' => $first, 'is_active' => true]);

        foreach ($images as $image) {
            Gallery::create(['image' => $image, 'is_active' => true]);
        }

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
