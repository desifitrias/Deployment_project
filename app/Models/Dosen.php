<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'alamat',
        'no_telp',
        'email',
        'matakuliah_id',
    ];

    /**
     * Get the matakuliah that owns the Dosen.
     */
    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($dosen) {
            // Prepend 'D24001' to the nip attribute
            $dosen->nip = 'D24001' . rand(1000, 9999); // Here we generate a random 4-digit number
        });
    }
}
