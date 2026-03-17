<?php

declare(strict_types=1);

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('admin/products.title'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tag')
                    ->label(__('admin/products.tag'))
                    ->searchable(),
                ToggleColumn::make('is_active')
                    ->label(__('admin/common.active')),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->filters([
                //
            ])
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
                        ->label(__('admin/common.bulk_delete')),
                ])->label(__('admin/common.bulk_actions')),
            ]);
    }
}
