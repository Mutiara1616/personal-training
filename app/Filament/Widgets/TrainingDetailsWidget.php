<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TrainingDetailsWidget extends BaseWidget
{
    protected static ?int $sort = 3;
    
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Payment::query()
                    ->whereMonth('created_at', now()->month)
                    ->where('status', 'approved')
            )
            ->heading('Rincian Pelatihan Bulan Ini')
            ->columns([
                Tables\Columns\TextColumn::make('member.name')
                    ->label('Member')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('katalog.judul')
                    ->label('Nama Pelatihan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('participants')
                    ->label('Jumlah Partisipan')
                    ->formatStateUsing(function ($state) {
                        if (empty($state)) return 0;
                        $participants = json_decode($state, true);
                        return is_array($participants) ? count($participants) : 0;
                    }),
                Tables\Columns\TextColumn::make('amount')
                    ->label('Total Pembayaran')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Pembayaran')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->striped();
    }
}