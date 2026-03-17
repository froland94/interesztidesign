<?php

declare(strict_types=1);

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('admin/posts.title'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('published_at')
                    ->label(__('admin/posts.published'))
                    ->date('Y-m-d')
                    ->sortable(),
                ToggleColumn::make('is_published')
                    ->label(__('admin/posts.is_published')),
            ])
            ->defaultSort('published_at', 'desc')
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
