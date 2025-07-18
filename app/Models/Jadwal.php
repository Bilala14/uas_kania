<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'guru_id',
        'bidang',
        'hari',
        'jammasuk',
        'jamkeluar',
    ];

    /**
     * Relasi ke model Guru
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Relasi ke model Kelas
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
