<?php

namespace App\Filament\Widgets;

use App\Models\Member;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms;
use Illuminate\Support\Facades\Hash;

class MemberListWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Member::query())
            ->heading('Daftar Member Terdaftar')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Registrasi')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Tambah Member')
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->unique(table: Member::class),
                        Forms\Components\TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required()
                            ->minLength(8)
                            ->confirmed(),
                        Forms\Components\TextInput::make('password_confirmation')
                            ->label('Konfirmasi Password')
                            ->password()
                            ->required(),
                    ])
                    ->using(function (array $data): Member {
                        return Member::create([
                            'name' => $data['name'],
                            'email' => $data['email'],
                            'password' => Hash::make($data['password']),
                        ]);
                    }),
            ])
            ->actions([
                EditAction::make()
                    ->label('Edit')
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),
                    ]),
                DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading('Hapus Member')
                    ->modalDescription('Apakah anda yakin ingin menghapus member ini?')
                    ->modalSubmitActionLabel('Ya, Hapus')
                    ->modalCancelActionLabel('Batal'),
            ]);
    }
}