<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DimAkunResource\Pages;
use App\Filament\Admin\Resources\DimAkunResource\RelationManagers;
use App\Models\DimAkun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DimAkunResource extends Resource
{
    protected static ?string $model = DimAkun::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_akun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_akun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_akun')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_akun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_akun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_akun')
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
            'index' => Pages\ListDimAkuns::route('/'),
            'create' => Pages\CreateDimAkun::route('/create'),
            'edit' => Pages\EditDimAkun::route('/{record}/edit'),
        ];
    }
}
