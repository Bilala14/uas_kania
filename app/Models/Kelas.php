<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Tambahkan ini supaya mass assignment untuk kolom ini diperbolehkan
   protected $fillable = ['kode_kelas', 'nama_kelas'];

}
