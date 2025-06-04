<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Table name (opsional jika nama model & tabel sama secara default)
    protected $table = 'barangs';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'stok',
        'deskripsi',
    ];
}
