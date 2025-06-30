<?php

namespace App\Filament\Admin\Resources\DimWilayahResource\Pages;

use App\Filament\Admin\Resources\DimWilayahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimWilayahs extends ListRecords
{
    protected static string $resource = DimWilayahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
