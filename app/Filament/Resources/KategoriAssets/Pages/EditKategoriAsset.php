<?php

namespace App\Filament\Resources\KategoriAssets\Pages;

use App\Filament\Resources\KategoriAssets\KategoriAssetResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriAsset extends EditRecord
{
    protected static string $resource = KategoriAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
