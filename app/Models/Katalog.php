<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Katalog extends Model
{
   protected $fillable = [
       'judul', 
       'slug',
       'deskripsi',
       'harga',
       'tanggal_mulai',
       'tanggal_selesai',
       'lokasi',
       'gambar',
       'whatsapp',
       'is_active',
       'quota',               
        'registered_participants'
   ];

   protected $casts = [
       'tanggal_mulai' => 'date',
       'tanggal_selesai' => 'date',
       'harga' => 'decimal:2',
       'is_active' => 'boolean',
       'quota' => 'integer',               
       'registered_participants' => 'integer' 
   ];

   protected static function boot()
   {
       parent::boot();
       
       static::creating(function ($katalog) {
           if (! $katalog->slug) {
               $katalog->slug = Str::slug($katalog->judul);
           }
       });
   }

   protected function gambar(): Attribute
   {
       return Attribute::make(
           get: fn (?string $value) => $value ? asset('storage/' . $value) : null,
       );
   }
}