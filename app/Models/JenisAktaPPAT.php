<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAktaPPAT extends Model
{
    use HasFactory;

    protected $table = 'jenis_akta_ppat';

    protected $fillable = [
        'id',
        'name',
    ];

    public function akta()
    {
        return $this->hasMany(AktaPPAT::class);
    }
}
