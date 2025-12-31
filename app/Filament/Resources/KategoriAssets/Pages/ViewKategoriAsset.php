<?php

namespace App\Filament\Resources\KategoriAssets\Pages;

use App\Filament\Resources\KategoriAssets\KategoriAssetResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKategoriAsset extends ViewRecord
{
    protected static string $resource = KategoriAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
