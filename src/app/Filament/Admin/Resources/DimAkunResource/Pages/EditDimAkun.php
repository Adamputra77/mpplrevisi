<?php

namespace App\Filament\Admin\Resources\DimAkunResource\Pages;

use App\Filament\Admin\Resources\DimAkunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimAkun extends EditRecord
{
    protected static string $resource = DimAkunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
