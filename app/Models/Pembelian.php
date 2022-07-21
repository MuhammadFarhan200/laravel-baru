<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    // Field apa saja yang bisa diisi
    public $fillable = ['nama_pembeli', 'tanggal_pembelian', 'nama_barang', 'harga_satuan', 'jumlah_barang'];
    // Membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // Aktif
    public $timestamps = true;
}
