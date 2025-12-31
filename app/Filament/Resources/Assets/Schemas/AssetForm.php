<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
    ->components([
        TextInput::make('kode')
            ->required(),

        TextInput::make('nama')
            ->required(),

        Select::make('kategori_asset_id')
            ->label('Kategori Aset')
            ->relationship('kategori', 'nama')
            ->required(),

        Select::make('lokasi_id')
            ->relationship('lokasi', 'nama')
            ->required(),

        Select::make('kondisi_asset_id')
            ->label('Kondisi')
            ->relationship('kondisi', 'nama')
            ->required(),

        Select::make('supplier_id')
            ->relationship('supplier', 'nama')
            ->searchable(),

        DatePicker::make('tanggal_perolehan')
            ->required(),

        TextInput::make('nilai')
            ->numeric()
            ->required(),

        Select::make('status')
            ->options([
                'aktif' => 'Aktif',
                'dipinjam' => 'Dipinjam',
                'dihapus' => 'Dihapus',
            ])
            ->required(),
    ]);
    }
}
