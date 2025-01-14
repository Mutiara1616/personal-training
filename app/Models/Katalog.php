<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
       'gambar'
   ];

   protected $casts = [
       'tanggal_mulai' => 'date',
       'tanggal_selesai' => 'date',
       'harga' => 'decimal:2',
   ];

   // Tambahkan mutator untuk mengisi slug otomatis
   protected static function boot()
   {
       parent::boot();
       
       static::creating(function ($katalog) {
           if (! $katalog->slug) {
               $katalog->slug = Str::slug($katalog->judul);
           }
       });
   }

   // Accessor untuk URL gambar dengan url()
   public function getGambarUrlAttribute(): ?string 
   {
       if ($this->gambar) {
           return url('storage/' . $this->gambar);
       }
       return null;
   }
}