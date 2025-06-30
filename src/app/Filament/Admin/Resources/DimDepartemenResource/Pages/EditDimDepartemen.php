<?php

namespace App\Filament\Admin\Resources\DimDepartemenResource\Pages;

use App\Filament\Admin\Resources\DimDepartemenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimDepartemen extends EditRecord
{
    protected static string $resource = DimDepartemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
