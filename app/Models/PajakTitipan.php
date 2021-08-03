<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PajakTitipan extends Model
{
    use HasFactory;

    protected $table = 'pajak_titipan';

    protected $fillable = [
        'id_project',
        'id_jenis_estimasi',
        'nomor_id',
        'nilai_estimasi',
        'keterangan',
    ];
}
