<?php

namespace App\Filament\Admin\Resources\Agents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AgentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Name'),
                TextInput::make('email')
                    ->email()
                    ->label('Email'),
                TextInput::make('phone')
                    ->label('Phone'),
                TextInput::make('address')
                    ->label('Address'),
                FileUpload::make('photo')
                    ->label('Photo')
                    ->image(),
                Radio::make('status')
                    ->label('Status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive'])
                    ->default('active'),
            ]);
    }
}
