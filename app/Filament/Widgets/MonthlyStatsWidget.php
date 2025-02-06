<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use App\Models\Katalog; 
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class MonthlyStatsWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $currentMonth = Carbon::now()->month;
        
        // Hitung jumlah pelatihan yang diikuti bulan ini
        $totalTrainings = Payment::whereMonth('created_at', $currentMonth)
            ->where('status', 'approved')
            ->count();

        // Hitung total pembayaran yang masuk bulan ini
        $totalPayments = Payment::whereMonth('created_at', $currentMonth)
            ->where('status', 'approved')
            ->sum('amount');

        // Hitung jumlah peserta bulan ini
        $totalParticipants = Payment::whereMonth('created_at', $currentMonth)
            ->where('status', 'approved')
            ->count();

        return [
            Stat::make('Total Pelatihan', $totalTrainings)
                ->description('Bulan ini')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Total Pembayaran', 'Rp ' . number_format($totalPayments, 0, ',', '.'))
                ->description('Bulan ini')
                ->icon('heroicon-o-currency-dollar'),
                
            Stat::make('Total Peserta', $totalParticipants)
                ->description('Bulan ini')
                ->icon('heroicon-o-users'),
        ];
    }
}