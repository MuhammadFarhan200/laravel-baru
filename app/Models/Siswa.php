<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
    use HasFactory;
    // Field apa saja yang bisa diisi
    public $fillable = ['nama', 'nis', 'agama', 'jenis_kelamin', 'alamat', 'tgl_lahir'];
    // Membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // Aktif
    public $timestamps = true;

}