<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl(function ($record) {
                        if (!$record->image) {
                            return 'https://ui-avatars.com/api/?background=0D8F81&color=fff&name=' . urlencode($record->name);
                        }
                        return asset('storage/' . $record->image);
                    }),
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('role')
                    ->icon(fn(string $state): Heroicon => match ($state) {
                        default => Heroicon::OutlinedShieldCheck,
                    })
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'user' => 'success',
                        'admin' => 'danger',
                        'kasir' => 'warning',
                    }),
                TextColumn::make('status')
                    ->badge()
                    ->icon(fn(string $state): Heroicon => match ($state) {
                        'active' => Heroicon::OutlinedCheckCircle,
                        'inactive' => Heroicon::OutlinedXCircle,
                        'banned' => Heroicon::OutlinedNoSymbol,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'inactive' => 'gray',
                        'active' => 'success',
                        'banned' => 'danger',
                    })
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
