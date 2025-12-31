<?php

namespace App\Filament\Resources\PemeliharaanAssets\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PemeliharaanAssetInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('asset_id')
                    ->numeric(),
                TextEntry::make('tanggal')
                    ->date(),
                TextEntry::make('keterangan')
                    ->columnSpanFull(),
                TextEntry::make('biaya')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
