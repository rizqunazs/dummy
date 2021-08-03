<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
    use HasFactory;

    public const BERGERAK = 'Bergerak';
    public const TIDAK_BERGERAK = 'Tidak Bergerak';
    public const DALAM_WILAYAH = 'Dalam Wilayah';
    public const LUAR_WILAYAH = 'Luar Wilayah';

    protected $fillable = [
        'kategori',
        'id_project',
        'id_kendaraan',
        'atas_nama',
        'nomor_id',
        'merk_kendaraan',
        'no_rangka',
        'no_mesin',
        'tahun_keluaran',
        'warna',
        'keterangan',
        'id_sertifikat',
        'wilayah_kerja',
        'kota',
        'kecamatan',
        'kelurahan',
        'alamat',
        'luas_bangunan',
        'njop',
        'nib',
        'nop',
    ];

    public function setKategoriAttribute($value)
    {
        if ($value == '1') {
            $this->attributes['kategori'] = static::BERGERAK;
        } else {
            $this->attributes['kategori'] = static::TIDAK_BERGERAK;
        }
    }

    public function setWilayahKerjaAttribute($value)
    {
        if ($value == '1') {
            $this->attributes['wilayah_kerja'] = static::DALAM_WILAYAH;
        } else {
            $this->attributes['wilayah_kerja'] = static::LUAR_WILAYAH;
        }
    }

    public function scopeBergerak(Builder $query)
    {
        return $query->where('kategori', static::BERGERAK);
    }

    public function scopeTidakBergerak(Builder $query)
    {
        return $query->where('kategori', static::TIDAK_BERGERAK);
    }
}
