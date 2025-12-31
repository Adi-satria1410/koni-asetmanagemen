<?php

namespace App\Filament\Resources\PemeliharaanAssets\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PemeliharaanAssetsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
    TextColumn::make('asset.nama')
        ->label('Aset')
        ->searchable()
        ->sortable(),

    TextColumn::make('tanggal')
        ->date()
        ->sortable(),

    TextColumn::make('keterangan')
        ->limit(40),

    TextColumn::make('biaya')
        ->money('IDR')
        ->sortable(),

    TextColumn::make('created_at')
        ->dateTime()
        ->toggleable(isToggledHiddenByDefault: true),
])

            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
