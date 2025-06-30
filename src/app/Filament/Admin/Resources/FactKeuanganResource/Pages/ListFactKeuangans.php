<?php

namespace App\Filament\Admin\Resources\FactKeuanganResource\Pages;

use App\Filament\Admin\Resources\FactKeuanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFactKeuangans extends ListRecords
{
    protected static string $resource = FactKeuanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
