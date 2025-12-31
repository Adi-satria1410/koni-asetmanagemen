<?php

namespace App\Filament\Resources\PenghapusanAssets\Pages;

use App\Filament\Resources\PenghapusanAssets\PenghapusanAssetResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPenghapusanAsset extends ViewRecord
{
    protected static string $resource = PenghapusanAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
