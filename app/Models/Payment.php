<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'member_id',
        'katalog_id', 
        'amount',
        'payment_method',
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
}