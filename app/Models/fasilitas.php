<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['kd_fasilitas', 'wifi', 'ukuran_kasur', 'jumlah_kasur'];
}