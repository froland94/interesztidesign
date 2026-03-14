<?php

declare(strict_types=1);

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),

                Tabs::make('Translations')
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
                                    ->simple(
                                        TextInput::make('item')
                                            ->required()
                                    ),
                                Textarea::make('price.hu')
                                    ->label('Ár (több soros is lehet)')
                                    ->rows(3),
                                TextInput::make('cta_text.hu')
                                    ->label('Gomb szöveg'),
                            ]),

                        Tabs\Tab::make('English')
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('tag.en')
                                    ->label('Tag (e.g. Vibe check)'),
                                TextInput::make('title.en')
                                    ->label('Title'),
                                Textarea::make('description.en')
                                    ->label('Description')
                                    ->rows(5),
                                Repeater::make('includes.en')
                                    ->label('What is included')
                                    ->simple(
                                        TextInput::make('item')
                                    ),
                                Textarea::make('price.en')
                                    ->label('Price (can be multi-line)')
                                    ->rows(3),
                                TextInput::make('cta_text.en')
                                    ->label('CTA Button Text'),
                            ]),
                    ]),
            ]);
    }
}
