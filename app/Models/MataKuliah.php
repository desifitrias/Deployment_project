<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'matakuliah',
        'dosen_id',
    ];

    // Relasi ke model Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
