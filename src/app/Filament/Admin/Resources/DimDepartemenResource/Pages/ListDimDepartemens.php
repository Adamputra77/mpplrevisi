<?php

namespace App\Filament\Admin\Resources\DimDepartemenResource\Pages;

use App\Filament\Admin\Resources\DimDepartemenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimDepartemens extends ListRecords
{
    protected static string $resource = DimDepartemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
