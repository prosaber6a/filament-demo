<?php

namespace App\Filament\Admin\Resources\HRS\Pages;

use App\Filament\Admin\Resources\HRS\HRResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHR extends ViewRecord
{
    protected static string $resource = HRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
