<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FactKeuanganResource\Pages;
use App\Filament\Admin\Resources\FactKeuanganResource\RelationManagers;
use App\Models\FactKeuangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FactKeuanganResource extends Resource
{
    protected static ?string $model = FactKeuangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_waktu')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_departemen')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_akun')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_proyek')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_wilayah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_pendapatan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_pengeluaran')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('laba_rugi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('laba_untung')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_waktu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_departemen')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_akun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_proyek')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_wilayah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_pendapatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_pengeluaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('laba_rugi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('laba_untung')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListFactKeuangans::route('/'),
            'create' => Pages\CreateFactKeuangan::route('/create'),
            'edit' => Pages\EditFactKeuangan::route('/{record}/edit'),
        ];
    }
}
