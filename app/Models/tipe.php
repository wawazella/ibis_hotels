<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipe extends Model
{
    use HasFactory;

    protected $fillable = ['kd_tipe', 'tipe_kamar'];
}