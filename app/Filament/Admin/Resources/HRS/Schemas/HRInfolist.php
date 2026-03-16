<?php

namespace App\Filament\Admin\Resources\HRS\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HRInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'md' => 2,
                'xl' => 3,
            ])
            ->components([
                TextEntry::make('name')
                    ->columnSpanFull()
                    ->placeholder('-'),
                TextEntry::make('father')
                    ->placeholder('-'),
                TextEntry::make('mother')
                    ->placeholder('-'),
                TextEntry::make('dob')->label('Date of Birth')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
