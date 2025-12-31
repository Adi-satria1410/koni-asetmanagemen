<?php

namespace App\Filament\Resources\PemeliharaanAssets\Pages;

use App\Filament\Resources\PemeliharaanAssets\PemeliharaanAssetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPemeliharaanAssets extends ListRecords
{
    protected static string $resource = PemeliharaanAssetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
