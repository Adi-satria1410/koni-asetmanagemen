<?php

namespace App\Filament\Resources\PenghapusanAssets;

use App\Filament\Resources\PenghapusanAssets\Pages\CreatePenghapusanAsset;
use App\Filament\Resources\PenghapusanAssets\Pages\EditPenghapusanAsset;
use App\Filament\Resources\PenghapusanAssets\Pages\ListPenghapusanAssets;
use App\Filament\Resources\PenghapusanAssets\Pages\ViewPenghapusanAsset;
use App\Filament\Resources\PenghapusanAssets\Schemas\PenghapusanAssetForm;
use App\Filament\Resources\PenghapusanAssets\Schemas\PenghapusanAssetInfolist;
use App\Filament\Resources\PenghapusanAssets\Tables\PenghapusanAssetsTable;
use App\Models\PenghapusanAsset;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenghapusanAssetResource extends Resource
{
    protected static ?string $model = PenghapusanAsset::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Alasan';

    public static function form(Schema $schema): Schema
    {
        return PenghapusanAssetForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PenghapusanAssetInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenghapusanAssetsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPenghapusanAssets::route('/'),
            'create' => CreatePenghapusanAsset::route('/create'),
            'view' => ViewPenghapusanAsset::route('/{record}'),
            'edit' => EditPenghapusanAsset::route('/{record}/edit'),
        ];
    }
}
