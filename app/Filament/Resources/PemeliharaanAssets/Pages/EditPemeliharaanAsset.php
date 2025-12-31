<?php

namespace App\Filament\Resources\PemeliharaanAssets\Pages;

use App\Filament\Resources\PemeliharaanAssets\PemeliharaanAssetResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPemeliharaanAsset extends EditRecord
{
    protected static string $resource = PemeliharaanAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
