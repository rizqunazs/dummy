<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;
    protected $table = 'pemohon';
    protected $fillable = ['nik_ektp', 'fullname', 'gender', 'tempat_lahir', 'tanggal_lahir', 'pekerjaan_id', 'agama_id', 'alamat', 'no_telp', 'email', 'status_kawin'];

    public function permohonanSKCK()
    {
        return $this->belongsTo(PermohonanSKCK::class, 'pemohon_id');
    }
}
