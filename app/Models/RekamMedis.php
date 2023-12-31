<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nomor_antrian',
        'no_telpon',
        'poli',
        'no_rekam_medis',
        // tambahkan kolom lain yang dibutuhkan
    ];
}
