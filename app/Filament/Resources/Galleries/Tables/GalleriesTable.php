<?php

declare(strict_types=1);

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Kép')
                    ->disk('galleries')
                    ->height(60)
                    ->width(80),
                ToggleColumn::make('is_active')
                    ->label('Aktív'),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->filters([])
            ->recordActions([
                EditAction::make()
                    ->hiddenLabel()
                    ->size('lg'),
                DeleteAction::make()
                    ->hiddenLabel()
                    ->size('lg'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('Kijelöltek törlése'),
                ])->label('Műveletek'),
            ]);
    }
}
