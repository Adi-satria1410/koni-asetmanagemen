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
                TextInput::make('kategori_asset_id')
                    ->required()
                    ->numeric(),
                TextInput::make('lokasi_id')
                    ->required()
                    ->numeric(),
                TextInput::make('kondisi_asset_id')
                    ->required()
                    ->numeric(),
                TextInput::make('supplier_id')
                    ->numeric(),
                DatePicker::make('tanggal_perolehan')
                    ->required(),
                TextInput::make('nilai')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(['aktif' => 'Aktif', 'dipinjam' => 'Dipinjam', 'dihapus' => 'Dihapus'])
                    ->required(),
            ]);
    }
}
