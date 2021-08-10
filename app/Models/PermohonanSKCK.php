<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanSKCK extends Model
{
    use HasFactory;
    protected $table = 'permohonan_skck';
    protected $fillable = ['keperluan'];

    public function skck()
    {
        return $this->belongsTo(SKCK::class, 'permohonan_id');
    }

    public function pemohon()
    {
        return $this->hasOne(Pemohon::class, 'pemohon_id');
    }
}
