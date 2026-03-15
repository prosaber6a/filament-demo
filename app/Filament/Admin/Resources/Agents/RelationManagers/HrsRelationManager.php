<?php

namespace App\Filament\Admin\Resources\Agents\RelationManagers;

use App\Filament\Admin\Resources\HRS\HRResource;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HrsRelationManager extends RelationManager
{
    protected static string $relationship = 'hrs';

    protected static ?string $relatedResource = HRResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ])
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('passport_no'),
                TextColumn::make('visa_no')
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
            ]);
    }
}
