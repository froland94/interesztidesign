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
                Tabs::make(__('admin/common.translations'))
                    ->columnSpanFull()
                    ->tabs([
                        Tabs\Tab::make(__('admin/common.hungarian'))
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('title.hu')
                                    ->label(__('admin/posts.title'))
                                    ->required()
                                    ->live(debounce: 500)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug.hu', Str::slug($state ?? ''))),
                                TextInput::make('slug.hu')
                                    ->label('Slug')
                                    ->required(),
                                TextInput::make('excerpt.hu')
                                    ->label(__('admin/posts.excerpt'))
                                    ->required(),
                            ]),
                        Tabs\Tab::make(__('admin/common.english'))
                            ->icon('heroicon-o-language')
                            ->schema([
                                TextInput::make('title.en')
                                    ->label(__('admin/posts.title'))
                                    ->live(debounce: 500)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug.en', Str::slug($state ?? ''))),
                                TextInput::make('slug.en')
                                    ->label('Slug'),
                                TextInput::make('excerpt.en')
                                    ->label(__('admin/posts.excerpt')),
                            ]),
                    ]),

                FileUpload::make('thumbnail')
                    ->label(__('admin/posts.thumbnail'))
                    ->disk('blog')
                    ->directory('')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->columnSpanFull(),

                Grid::make(2)
                    ->columnSpanFull()
                    ->visibleOn('edit')
                    ->schema([
                        Toggle::make('is_published')
                            ->label(__('admin/posts.is_published')),
                        DatePicker::make('published_at')
                            ->label(__('admin/posts.published_at')),
                    ]),

                Builder::make('content')
                    ->label(__('admin/posts.content'))
                    ->columnSpanFull()
                    ->blocks([
                        Block::make('text')
                            ->label(__('admin/posts.text_block'))
                            ->icon('heroicon-o-bars-3-bottom-left')
                            ->schema([
                                Tabs::make('text_lang')
                                    ->tabs([
                                        Tabs\Tab::make(__('admin/common.hungarian'))
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                RichEditor::make('content.hu')
                                                    ->label(__('admin/posts.text_hu'))
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
                                        Tabs\Tab::make(__('admin/common.english'))
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                RichEditor::make('content.en')
                                                    ->label(__('admin/posts.text_en'))
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
                            ->label(__('admin/posts.image_block'))
                            ->icon('heroicon-o-photo')
                            ->schema([
                                FileUpload::make('path')
                                    ->label(__('admin/common.image'))
                                    ->disk('blog')
                                    ->directory('')
                                    ->visibility('public')
                                    ->image()
                                    ->imagePreviewHeight('200')
                                    ->required(),
                                Tabs::make('image_caption_lang')
                                    ->tabs([
                                        Tabs\Tab::make(__('admin/common.hungarian'))
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                TextInput::make('caption.hu')
                                                    ->label(__('admin/posts.caption_hu')),
                                            ]),
                                        Tabs\Tab::make(__('admin/common.english'))
                                            ->icon('heroicon-o-language')
                                            ->schema([
                                                TextInput::make('caption.en')
                                                    ->label(__('admin/posts.caption_en')),
                                            ]),
                                    ]),
                            ]),

                        Block::make('gallery')
                            ->label(__('admin/posts.gallery_block'))
                            ->icon('heroicon-o-rectangle-group')
                            ->schema([
                                FileUpload::make('images')
                                    ->label(__('admin/common.images'))
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
