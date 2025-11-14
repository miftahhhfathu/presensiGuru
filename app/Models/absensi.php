<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';   // <- WAJIB
    protected $fillable = [
        'guru_id',
        'jadwal_id',
        'jam',
        'status',
        'tanggal',
    ];

    // Relasi ke guru
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    // Relasi ke jadwal
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}