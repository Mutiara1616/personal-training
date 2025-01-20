<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Filament\Resources\PaymentResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentApproved;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('member_id')
                    ->relationship('member', 'name')
                    ->required(),
                Forms\Components\Select::make('katalog_id')
                    ->relationship('katalog', 'judul')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected'
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('bukti_transfer')
                    ->image()
                    ->directory('bukti-transfer')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('member.name'),
                Tables\Columns\TextColumn::make('katalog.judul'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        default => 'warning',
                    }),
                Tables\Columns\ImageColumn::make('bukti_transfer'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->action(function (Payment $record) {
                        $record->update(['status' => 'approved']);
                        
                        // Kirim email ke user
                        Mail::to($record->member->email)->send(new PaymentApproved($record));
                    })
                    ->requiresConfirmation()
                    ->visible(fn (Payment $record): bool => $record->status === 'pending'),
                    
                Tables\Actions\Action::make('reject')
                    ->action(function (Payment $record) {
                        $record->update(['status' => 'rejected']);
                    })
                    ->requiresConfirmation()
                    ->visible(fn (Payment $record): bool => $record->status === 'pending'),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationLabel = 'Pembayaran';
    protected static ?string $modelLabel = 'Pembayaran';
    protected static ?string $pluralModelLabel = 'Pembayaran';
    }
