<?php

declare(strict_types=1);

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
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
                                TextInput::make('title.hu')
                                    ->label('Cím')
                                    ->required()
                                    ->live(debounce: 500)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug.hu', Str::slug($state ?? ''))),
                                TextInput::make('slug.hu')
                                    ->label('Slug')
                                    ->required(),
                                TextInput::make('excerpt.hu')
                                    ->label('Kivonat')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Angol')
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('title.en')
                                    ->label('Cím')
                                    ->live(debounce: 500)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug.en', Str::slug($state ?? ''))),
                                TextInput::make('slug.en')
                                    ->label('Slug'),
                                TextInput::make('excerpt.en')
                                    ->label('Kivonat'),
                            ]),
                    ]),

                FileUpload::make('thumbnail')
                    ->label('Borítókép')
                    ->disk('blog')
                    ->directory('')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->columnSpanFull(),

                Grid::make(2)
                    ->columnSpanFull()
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Közzétéve'),
                        DatePicker::make('published_at')
                            ->label('Megjelenés dátuma'),
                    ]),

                Builder::make('content')
                    ->label('Tartalom')
                    ->columnSpanFull()
                    ->blocks([
                        Block::make('text')
                            ->label('Szöveg')
                            ->icon('heroicon-o-bars-3-bottom-left')
                            ->schema([
                                Tabs::make('text_lang')
                                    ->tabs([
                                        Tabs\Tab::make('Magyar')
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                RichEditor::make('content.hu')
                                                    ->label('Szöveg (Magyar)')
                                                    ->toolbarButtons([
                                                        'bold',
                                                        'italic',
                                                        'link',
                                                        'bulletList',
                                                        'orderedList',
                                                        'h2',
                                                        'h3',
                                                        'undo',
                                                        'redo',
                                                    ]),
                                            ]),
                                        Tabs\Tab::make('Angol')
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                RichEditor::make('content.en')
                                                    ->label('Szöveg (Angol)')
                                                    ->toolbarButtons([
                                                        'bold',
                                                        'italic',
                                                        'link',
                                                        'bulletList',
                                                        'orderedList',
                                                        'h2',
                                                        'h3',
                                                        'undo',
                                                        'redo',
                                                    ]),
                                            ]),
                                    ]),
                            ]),

                        Block::make('image')
                            ->label('Kép')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                FileUpload::make('path')
                                    ->label('Kép')
                                    ->disk('blog')
                                    ->directory('')
                                    ->visibility('public')
                                    ->image()
                                    ->imagePreviewHeight('200')
                                    ->required(),
                                Tabs::make('image_caption_lang')
                                    ->tabs([
                                        Tabs\Tab::make('Magyar')
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                TextInput::make('caption.hu')
                                                    ->label('Felirat (Magyar)'),
                                            ]),
                                        Tabs\Tab::make('Angol')
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                TextInput::make('caption.en')
                                                    ->label('Felirat (Angol)'),
                                            ]),
                                    ]),
                            ]),

                        Block::make('gallery')
                            ->label('Galéria')
                            ->icon('heroicon-o-rectangle-group')
                            ->schema([
                                FileUpload::make('images')
                                    ->label('Képek')
                                    ->disk('blog')
                                    ->directory('')
                                    ->visibility('public')
                                    ->image()
                                    ->multiple()
                                    ->reorderable()
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
