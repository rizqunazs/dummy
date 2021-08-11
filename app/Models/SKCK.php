<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKCK extends Model
{
    use HasFactory;
    protected $table = 'skck';
    protected $fillable = ['no_skck', 'isApproved'];
    public $timestamps = false;

    public function scopeApproved($query)
    {
        return $query->where('isApproved', true);
    }

    public function scopeRejected($query)
    {
        return $query->where('isApproved', false);
    }

    public function permohonan()
    {
        return $this->hasOne(PermohonanSKCK::class, 'permohonan_id');
    }
}
