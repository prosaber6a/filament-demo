<?php

namespace App\Filament\Admin\Resources\HRS;

use App\Filament\Admin\Resources\HRS\Pages\CreateHR;
use App\Filament\Admin\Resources\HRS\Pages\EditHR;
use App\Filament\Admin\Resources\HRS\Pages\ListHRS;
use App\Filament\Admin\Resources\HRS\Pages\ViewHR;
use App\Filament\Admin\Resources\HRS\Schemas\HRForm;
use App\Filament\Admin\Resources\HRS\Schemas\HRInfolist;
use App\Filament\Admin\Resources\HRS\Tables\HRSTable;
use App\Models\HR;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HRResource extends Resource
{
    protected static ?string $model = HR::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'HRs';

    protected static ?string $modelLabel = 'HR';
    
    protected static ?string $pluralModelLabel = 'HRs';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return HRForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HRInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HRSTable::configure($table);
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
            'index' => ListHRS::route('/'),
            'create' => CreateHR::route('/create'),
            'view' => ViewHR::route('/{record}'),
            'edit' => EditHR::route('/{record}/edit'),
        ];
    }
}
