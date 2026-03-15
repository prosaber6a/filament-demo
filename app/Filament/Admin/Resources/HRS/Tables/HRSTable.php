<?php

namespace App\Filament\Admin\Resources\HRS\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HRSTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('name')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('father')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('agent.name')->label('Agent')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('mofa_id')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('passport_no')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('visa_no')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('sponsor_name')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('profession_en')->label('Profession')->searchable()->sortable()->toggleable(isToggledHiddenByDefault: false),
                
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    // Relation with Agent
    
}
