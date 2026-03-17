<?php

declare(strict_types=1);

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    ImageColumn::make('image')
                        ->label(__('admin/common.image'))
                        ->disk('galleries')
                        ->height(140),
                    ToggleColumn::make('is_active')
                        ->label(__('admin/common.active')),
                ])->space(2)->extraAttributes(['class' => 'overflow-hidden']),
            ])
            ->contentGrid([
                'sm' => 2,
                'md' => 3,
                'lg' => 4,
                'xl' => 5,
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->defaultPaginationPageOption(25)
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
                        ->label(__('admin/common.bulk_delete')),
                ])->label(__('admin/common.bulk_actions')),
            ]);
    }
}
