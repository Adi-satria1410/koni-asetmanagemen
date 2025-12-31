<?php

namespace App\Filament\Resources\PenghapusanAssets\Pages;

use App\Filament\Resources\PenghapusanAssets\PenghapusanAssetResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPenghapusanAsset extends EditRecord
{
    protected static string $resource = PenghapusanAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
