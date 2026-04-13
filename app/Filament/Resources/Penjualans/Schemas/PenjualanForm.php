<?php

namespace App\Filament\Resources\Penjualans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class PenjualanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('pembeli')
                    ->label('Nama Pembeli')
                    ->required()
                    ->maxLength(50),
                TextInput::make('penjualan_kode')
                    ->label('Kode Penjualan')
                    ->required()
                    ->maxLength(20),
                DateTimePicker::make('penjualan_tanggal')
                    ->label('Tanggal Penjualan')
                    ->required(),
                Select::make('user_id')
                    ->label('Petugas')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }
}
