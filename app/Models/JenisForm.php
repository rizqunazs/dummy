<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisForm extends Model
{
    use HasFactory;

    protected $table = 'jenis_form';

    protected $fillable = [
        'name'
    ];
}
