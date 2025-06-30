<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DimProyekResource\Pages;
use App\Filament\Admin\Resources\DimProyekResource\RelationManagers;
use App\Models\DimProyek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DimProyekResource extends Resource
{
    protected static ?string $model = DimProyek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_proyek')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tipe_proyek')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_proyek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipe_proyek')
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
            'index' => Pages\ListDimProyeks::route('/'),
            'create' => Pages\CreateDimProyek::route('/create'),
            'edit' => Pages\EditDimProyek::route('/{record}/edit'),
        ];
    }
}
