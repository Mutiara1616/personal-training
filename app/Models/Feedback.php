<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'member_id',
        'rating',
        'comment',
        'type',
        'message'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}