<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->required(),
                TextInput::make('password')->required()->password()->revealable(),
                TextInput::make('phone')->required(),
                Select::make('role')
                ->options([
                    'admin' => 'admin',
                    'kasir' => 'kasir',
                    'user' => 'user',
                ])
                ->required(),
                Select::make('status')
                ->options([
                    'active' => 'active',
                    'inactive' => 'inactive',
                    'banned' => 'banned',
                ])
                ->required(),
                FileUpload::make('photo')->directory('photo_profile')->visibility('public')->image()->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp']),
            ]);
    }
}
