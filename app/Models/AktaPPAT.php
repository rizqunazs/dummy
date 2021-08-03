<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaPPAT extends Model
{
    use HasFactory;
    protected $table = "akta_ppat";

    protected $fillable = [
        'id_project',
        'akta',
        'tanggal_penomoran',
        'jenis_nomor',
        'nomor_id',
        'id_jenis_akta_ppat',
        'biaya',
        'harga',
        'keterangan'
    ];


    public function jenisAkta()
    {
        return $this->belongsTo(JenisAktaPPAT::class, 'id_jenis_akta_ppat');
    }
}
