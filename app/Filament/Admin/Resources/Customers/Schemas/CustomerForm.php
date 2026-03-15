<?php

namespace App\Filament\Admin\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('phone')->tel()->required(),
                TextInput::make('address'),
                FileUpload::make('photo')->image(),
                Radio::make('status')->options(['active' => 'Active', 'inactive' => 'Inactive'])->inline()->required()
            ]);
    }
}
