<?php

declare(strict_types=1);

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make(__('admin/common.translations'))
                    ->columnSpanFull()
                    ->tabs([
                        Tabs\Tab::make(__('admin/common.hungarian'))
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('tag.hu')
                                    ->label(__('admin/products.tag')),
                                TextInput::make('title.hu')
                                    ->label(__('admin/products.title'))
                                    ->required(),
                                Textarea::make('description.hu')
                                    ->label(__('admin/products.description'))
                                    ->required()
                                    ->rows(5),
                                Repeater::make('includes.hu')
                                    ->label(__('admin/products.includes'))
                                    ->required()
                                    ->simple(
                                        TextInput::make('item')
                                            ->label(__('admin/common.item'))
                                            ->required()
                                    ),
                                Textarea::make('price.hu')
                                    ->label(__('admin/products.price'))
                                    ->rows(3),
                                TextInput::make('cta_text.hu')
                                    ->label(__('admin/products.cta_text')),
                            ]),

                        Tabs\Tab::make(__('admin/common.english'))
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('tag.en')
                                    ->label(__('admin/products.tag')),
                                TextInput::make('title.en')
                                    ->label(__('admin/products.title')),
                                Textarea::make('description.en')
                                    ->label(__('admin/products.description'))
                                    ->rows(5),
                                Repeater::make('includes.en')
                                    ->label(__('admin/products.includes'))
                                    ->simple(
                                        TextInput::make('item')
                                            ->label(__('admin/common.item'))
                                    ),
                                Textarea::make('price.en')
                                    ->label(__('admin/products.price'))
                                    ->rows(3),
                                TextInput::make('cta_text.en')
                                    ->label(__('admin/products.cta_text')),
                            ]),
                    ]),
            ]);
    }
}
