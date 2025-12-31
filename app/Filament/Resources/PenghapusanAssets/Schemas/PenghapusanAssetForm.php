<?php

namespace App\Filament\Resources\PenghapusanAssets\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenghapusanAssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
    Select::make('asset_id')
        ->label('Aset')
        ->relationship('asset', 'nama')
        ->searchable()
        ->required(),

    DatePicker::make('tanggal')
        ->required(),

    Textarea::make('alasan')
        ->required(),
]);
    }
}
