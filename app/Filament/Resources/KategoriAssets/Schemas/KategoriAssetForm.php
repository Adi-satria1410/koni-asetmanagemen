<?php

namespace App\Filament\Resources\KategoriAssets\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KategoriAssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                ->required()
                ->maxLength(100),

            Textarea::make('keterangan')
                ->columnSpanFull(),
        ]);
    }
}
