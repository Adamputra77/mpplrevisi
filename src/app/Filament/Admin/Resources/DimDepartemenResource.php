<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DimDepartemenResource\Pages;
use App\Filament\Admin\Resources\DimDepartemenResource\RelationManagers;
use App\Models\DimDepartemen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DimDepartemenResource extends Resource
{
    protected static ?string $model = DimDepartemen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_departemen')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_departemen')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDimDepartemens::route('/'),
            'create' => Pages\CreateDimDepartemen::route('/create'),
            'edit' => Pages\EditDimDepartemen::route('/{record}/edit'),
        ];
    }
}
