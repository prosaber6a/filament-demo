<?php

namespace App\Filament\Admin\Resources\HRS\Pages;

use App\Filament\Admin\Resources\HRS\HRResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHRS extends ListRecords
{
    protected static string $resource = HRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
