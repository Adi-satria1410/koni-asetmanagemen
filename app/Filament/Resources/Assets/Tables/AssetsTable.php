<?php

namespace App\Filament\Resources\Assets\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AssetsTable
{
    public static function configure(Table $table): Table
    {
        return $table
    ->columns([
        TextColumn::make('kode')->searchable(),
        TextColumn::make('nama')->searchable(),

        TextColumn::make('kategori.nama')
            ->label('Kategori'),

        TextColumn::make('lokasi.nama'),

        TextColumn::make('kondisi.nama')
            ->label('Kondisi'),

        TextColumn::make('supplier.nama')
            ->label('Supplier'),

        TextColumn::make('tanggal_perolehan')->date(),

        TextColumn::make('nilai')->money('IDR'),

        TextColumn::make('status')->badge(),
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
