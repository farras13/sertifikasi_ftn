<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul', 'penerbit', 'halaman', 'thn_terbit', 'kategori', 'harga_buku', 'gambar_buku'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
