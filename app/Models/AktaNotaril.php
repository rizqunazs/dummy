<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaNotaril extends Model
{
    use HasFactory;
    protected $table = "akta_notaril";

    protected $fillable = [
        'id_project',
        'akta',
        'tanggal_penomoran',
        'jenis_nomor',
        'nomor_id',
        'id_jenis_akta_notaril',
        'biaya',
        'harga',
        'keterangan'
    ];


    public function jenisAkta()
    {
        return $this->belongsTo(JenisAktaNotaril::class, 'id_jenis_akta_notaril');
    }
}
