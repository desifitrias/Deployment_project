<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'alamat',
        'no_telp',
        'email',
        'prodi_id',
    ];

    // Relasi ke model Prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
