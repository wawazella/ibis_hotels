<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datakamar extends Model
{
    use HasFactory;
    
    protected $table = 'datakamar';
    protected $fillable = [ 'nama_kamar', 'gambar_kamar', 'Deskripsi_kamar', 'harga'];
}