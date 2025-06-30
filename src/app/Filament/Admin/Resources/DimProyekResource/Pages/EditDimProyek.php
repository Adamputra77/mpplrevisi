<?php

namespace App\Filament\Admin\Resources\DimProyekResource\Pages;

use App\Filament\Admin\Resources\DimProyekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimProyek extends EditRecord
{
    protected static string $resource = DimProyekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
