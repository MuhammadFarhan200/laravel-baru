<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
    use HasFactory;
    // Field apa saja yang bisa diisi
    public $fillable = ['nama', 'nis', 'agama', 'jenis_kelamin', 'alamat', 'tgl_lahir','id_guru'];
    // Membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // Aktif
    public $timestamps = true;

    // Membuat Relasi One to One
    public function wali() {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->hasOne(Wali::class, 'id_siswa');
    }

    // membuat relasi one to many di model
    public function guru()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'Guru' melalui 'id_siswa'
        return $this->belongsTo(Guru::class, 'id_guru');
    }

}