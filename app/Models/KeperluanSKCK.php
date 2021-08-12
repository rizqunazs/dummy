<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeperluanSKCK extends Model
{
    use HasFactory;
    protected $table = 'keperluan_skck';
    protected $fillable = ['nama'];
    public $timestamps = false;
}
