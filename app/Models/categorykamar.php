<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorykamar extends Model
{
    use HasFactory;

    protected $table = 'categorykamar';
    protected $fillable = ['kd_kamar', 'nama_kamar', 'gambar_kamar'];
}