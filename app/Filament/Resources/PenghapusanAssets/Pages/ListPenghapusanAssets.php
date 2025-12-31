<?php

namespace App\Filament\Resources\PenghapusanAssets\Pages;

use App\Filament\Resources\PenghapusanAssets\PenghapusanAssetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenghapusanAssets extends ListRecords
{
    protected static string $resource = PenghapusanAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
