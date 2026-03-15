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
                Tabs::make('Fordítások')
                    ->columnSpanFull()
                    ->tabs([
                        Tabs\Tab::make('Magyar')
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('tag.hu')
                                    ->label('Címke (pl. Vibe check)'),
                                TextInput::make('title.hu')
                                    ->label('Megnevezés')
                                    ->required(),
                                Textarea::make('description.hu')
                                    ->label('Leírás')
                                    ->required()
                                    ->rows(5),
                                Repeater::make('includes.hu')
                                    ->label('Mit tartalmaz')
                                    ->required()
                                    ->simple(
                                        TextInput::make('item')
                                            ->label('Elem')
                                            ->required()
                                    ),
                                Textarea::make('price.hu')
                                    ->label('Ár (több soros is lehet)')
                                    ->rows(3),
                                TextInput::make('cta_text.hu')
                                    ->label('Gomb szöveg'),
                            ]),

                        Tabs\Tab::make('Angol')
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('tag.en')
                                    ->label('Címke (pl. Vibe check)'),
                                TextInput::make('title.en')
                                    ->label('Megnevezés'),
                                Textarea::make('description.en')
                                    ->label('Leírás')
                                    ->rows(5),
                                Repeater::make('includes.en')
                                    ->label('Mit tartalmaz')
                                    ->simple(
                                        TextInput::make('item')
                                            ->label('Elem')
                                    ),
                                Textarea::make('price.en')
                                    ->label('Ár (több soros is lehet)')
                                    ->rows(3),
                                TextInput::make('cta_text.en')
                                    ->label('Gomb szöveg'),
                            ]),
                    ]),
            ]);
    }
}
