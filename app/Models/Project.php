<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pihak;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'project';

    protected $fillable = [
        'id_jenis_form',
        'nilai_transaksi',
        'nilai_ht',
        'plafond_hutang',
        'keterangan',
        'kota',
        'nama_direktur',
        'modal_dasar',
        'badan_ajuan',
        'pendiri',
        'badan_disetujui',
        'notaris_partner',
    ];

    public function pihak()
    {
        return $this->hasMany(Pihak::class, 'id_project');
    }

    public function jenisForm()
    {
        return $this->belongsTo(JenisForm::class, 'id_jenis_form');
    }
}
