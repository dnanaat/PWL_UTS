<?php

namespace App\Filament\Resources\Stoks\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class StoksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('supplier.supplier_nama')
                    ->label('Nama Supplier')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('barang.barang_nama')
                    ->label('Nama Barang')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.nama')
                    ->label('Nama User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('stok_tanggal')
                    ->label('Tanggal Stok')
                    ->dateTime('d-m-Y H:i:s')
                    ->sortable(),
                TextColumn::make('stok_jumlah')
                    ->label('Jumlah Stok')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
