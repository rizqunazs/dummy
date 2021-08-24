<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KehilanganBarang extends Model
{
    use HasFactory;

    protected $table = 'laporan_kehilangan';
    protected $fillable = ['barang_hilang', 'waktu_kejadian', 'lokasi_kejadian', 'created_by'];

    public function pemohon()
    {
        return $this->hasOne(Pemohon::class, 'pemohon_id');
    }
}
