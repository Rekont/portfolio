<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            // Menampilkan Nama Pengirim
            Tables\Columns\TextColumn::make('name')
                ->label('Nama Pengirim')
                ->searchable(), // Agar bisa dicari

            // Menampilkan Email
            Tables\Columns\TextColumn::make('email')
                ->icon('heroicon-m-envelope')
                ->copyable(), // Agar email bisa diklik copy

            // Menampilkan Pesan (dibatasi 50 karakter agar tidak kepanjangan)
            Tables\Columns\TextColumn::make('message')
                ->label('Pesan')
                ->limit(50),

            // Menampilkan Kapan Pesan Dibuat
            Tables\Columns\TextColumn::make('created_at')
                ->label('Waktu Masuk')
                ->dateTime()
                ->sortable(), // Agar bisa diurutkan dari yang terbaru
        ])
        ->defaultSort('created_at', 'desc') // Urutkan dari pesan terbaru
        ->filters([
            //
        ])
        ->actions([
            // Tombol aksi (Edit/Delete)
            Tables\Actions\ViewAction::make(), // Untuk melihat detail pesan
            Tables\Actions\DeleteAction::make(), // Untuk menghapus pesan
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
