<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Categories;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('slug')->required(),
                TextInput::make('description')->required(),
                TextInput::make('price')->required()->numeric()->prefix('Rp'),
                Select::make('category_id')
                ->label('Kategori')
                ->options(Categories::pluck('name', 'id')->toArray()),
                TextInput::make('stock')->label('stok')->required()->numeric(),
                FileUpload::make('image')
                ->directory('product_image')
                ->required()
                ->visibility('public')
                ->disk('public')
                ->image()
                ->maxSize(2048)
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'])
            ]);
    }
}
