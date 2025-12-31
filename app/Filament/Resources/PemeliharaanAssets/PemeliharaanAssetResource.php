<?php

namespace App\Filament\Resources\PemeliharaanAssets;

use App\Filament\Resources\PemeliharaanAssets\Pages\CreatePemeliharaanAsset;
use App\Filament\Resources\PemeliharaanAssets\Pages\EditPemeliharaanAsset;
use App\Filament\Resources\PemeliharaanAssets\Pages\ListPemeliharaanAssets;
use App\Filament\Resources\PemeliharaanAssets\Pages\ViewPemeliharaanAsset;
use App\Filament\Resources\PemeliharaanAssets\Schemas\PemeliharaanAssetForm;
use App\Filament\Resources\PemeliharaanAssets\Schemas\PemeliharaanAssetInfolist;
use App\Filament\Resources\PemeliharaanAssets\Tables\PemeliharaanAssetsTable;
use App\Models\PemeliharaanAsset;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PemeliharaanAssetResource extends Resource
{
    protected static ?string $model = PemeliharaanAsset::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Keterangan';

    public static function form(Schema $schema): Schema
    {
        return PemeliharaanAssetForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PemeliharaanAssetInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PemeliharaanAssetsTable::configure($table);
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
            'index' => ListPemeliharaanAssets::route('/'),
            'create' => CreatePemeliharaanAsset::route('/create'),
            'view' => ViewPemeliharaanAsset::route('/{record}'),
            'edit' => EditPemeliharaanAsset::route('/{record}/edit'),
        ];
    }
}
