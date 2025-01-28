<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Payment extends Model
{
    protected $fillable = [
        'member_id',
        'katalog_id',
        'amount',
        'payment_method',
        'bank_name',
        'participants',
        'status',
        'bukti_transfer'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function katalog()
    {
        return $this->belongsTo(Katalog::class);
    }

    protected function buktiTransfer(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => $value ? asset('storage/' . $value) : null,
        );
    }
}