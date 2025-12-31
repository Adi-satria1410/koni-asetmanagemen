<?php

namespace App\Filament\Resources\KategoriAssets\Pages;

use App\Filament\Resources\KategoriAssets\KategoriAssetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriAssets extends ListRecords
{
    protected static string $resource = KategoriAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
