<?php

namespace App\Filament\Admin\Resources\DimWilayahResource\Pages;

use App\Filament\Admin\Resources\DimWilayahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimWilayah extends EditRecord
{
    protected static string $resource = DimWilayahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
