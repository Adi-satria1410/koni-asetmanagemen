<?php

namespace App\Filament\Resources\KategoriAssets;

use App\Filament\Resources\KategoriAssets\Pages\CreateKategoriAsset;
use App\Filament\Resources\KategoriAssets\Pages\EditKategoriAsset;
use App\Filament\Resources\KategoriAssets\Pages\ListKategoriAssets;
use App\Filament\Resources\KategoriAssets\Pages\ViewKategoriAsset;
use App\Filament\Resources\KategoriAssets\Schemas\KategoriAssetForm;
use App\Filament\Resources\KategoriAssets\Schemas\KategoriAssetInfolist;
use App\Filament\Resources\KategoriAssets\Tables\KategoriAssetsTable;
use App\Models\KategoriAsset;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KategoriAssetResource extends Resource
{
    protected static ?string $model = KategoriAsset::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Kategori Asset';

    public static function form(Schema $schema): Schema
    {
        return KategoriAssetForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KategoriAssetInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategoriAssetsTable::configure($table);
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
            'index' => ListKategoriAssets::route('/'),
            'create' => CreateKategoriAsset::route('/create'),
            'view' => ViewKategoriAsset::route('/{record}'),
            'edit' => EditKategoriAsset::route('/{record}/edit'),
        ];
    }
}
