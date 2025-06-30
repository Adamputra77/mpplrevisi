<?php

namespace App\Filament\Admin\Resources\DimProyekResource\Pages;

use App\Filament\Admin\Resources\DimProyekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimProyeks extends ListRecords
{
    protected static string $resource = DimProyekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
