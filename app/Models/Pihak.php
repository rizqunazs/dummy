<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Pihak extends Model
{
    use HasFactory;

    protected $table = 'pihak';

    protected $fillable = [
        'nama',
        'alamat',
        'npwp',
        'pihak_ke',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
