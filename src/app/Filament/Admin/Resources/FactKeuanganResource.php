<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FactKeuanganResource\Pages;
use App\Models\FactKeuangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\URL;
use Filament\Tables\Actions\Action;

class FactKeuanganResource extends Resource
{
    protected static ?string $model = FactKeuangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Warehouse';
    protected static ?string $navigationLabel = 'Fact Keuangans';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('id_waktu')->required()->numeric(),
            Forms\Components\TextInput::make('id_departemen')->required()->numeric(),
            Forms\Components\TextInput::make('id_akun')->required()->numeric(),
            Forms\Components\TextInput::make('id_proyek')->required()->numeric(),
            Forms\Components\TextInput::make('id_wilayah')->required()->numeric(),
            Forms\Components\TextInput::make('total_pendapatan')->required()->numeric(),
            Forms\Components\TextInput::make('total_pengeluaran')->required()->numeric(),
            Forms\Components\TextInput::make('laba_rugi')->required()->numeric(),
            Forms\Components\TextInput::make('laba_untung')->required()->numeric(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_waktu')->label('ID Waktu')->sortable(),
                Tables\Columns\TextColumn::make('id_departemen')->label('ID Departemen')->sortable(),
                Tables\Columns\TextColumn::make('id_akun')->label('ID Akun')->sortable(),
                Tables\Columns\TextColumn::make('id_proyek')->label('ID Proyek')->sortable(),
                Tables\Columns\TextColumn::make('id_wilayah')->label('ID Wilayah')->sortable(),
                Tables\Columns\TextColumn::make('total_pendapatan')->label('Pendapatan')->money('IDR', true)->sortable(),
                Tables\Columns\TextColumn::make('total_pengeluaran')->label('Pengeluaran')->money('IDR', true)->sortable(),
                Tables\Columns\TextColumn::make('laba_rugi')->label('Laba Rugi')->money('IDR', true)->sortable(),
                Tables\Columns\TextColumn::make('laba_untung')->label('Laba Untung')->money('IDR', true)->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika perlu
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                Action::make('Export PDF')
                    ->label('Export PDF')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn () => URL::to('/export/fact-keuangan/pdf'))
                    ->openUrlInNewTab(),

                Action::make('Export Excel')
                    ->label('Export Excel')
                    ->icon('heroicon-o-document-text')
                    ->url(fn () => URL::to('/export/fact-keuangan/excel'))
                    ->openUrlInNewTab(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
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
