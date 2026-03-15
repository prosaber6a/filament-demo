<?php

namespace App\Filament\Admin\Resources\HRS\Pages;

use App\Filament\Admin\Resources\HRS\HRResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHR extends EditRecord
{
    protected static string $resource = HRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
