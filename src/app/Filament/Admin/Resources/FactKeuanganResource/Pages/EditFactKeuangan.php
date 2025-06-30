<?php

namespace App\Filament\Admin\Resources\FactKeuanganResource\Pages;

use App\Filament\Admin\Resources\FactKeuanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFactKeuangan extends EditRecord
{
    protected static string $resource = FactKeuanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
