<?php

namespace App\Filament\Resources\PemeliharaanAssets\Pages;

use App\Filament\Resources\PemeliharaanAssets\PemeliharaanAssetResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPemeliharaanAsset extends ViewRecord
{
    protected static string $resource = PemeliharaanAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
