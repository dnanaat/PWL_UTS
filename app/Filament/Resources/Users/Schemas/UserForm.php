<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('level_id')
                    ->label('Level')
                    ->relationship('level', 'level_nama')
                    ->required(),
                TextInput::make('username')
                    ->label('Username')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(20),
                TextInput::make('name')
                    ->label('Nama Pendek')
                    ->required()
                    ->maxLength(50),
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                TextInput::make('nama')
                    ->label('Nama Panjang')
                    ->required()
                    ->maxLength(100),
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->required(fn (string $context): bool => $context === 'create')
                    ->dehydrated(fn ($state) => filled($state))
                    ->maxLength(255),
            ]);
    }
}
