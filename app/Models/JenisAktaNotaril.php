<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAktaNotaril extends Model
{
    use HasFactory;

    protected $table = 'jenis_akta_notaril';

    protected $fillable = [
        'id',
        'name',
    ];

    public function akta()
    {
        return $this->hasMany(AktaNotaril::class);
    }
}
