<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'prodi',
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat mendefinisikannya di sini.
}
