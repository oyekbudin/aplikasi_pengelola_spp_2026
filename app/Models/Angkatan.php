<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kelompok;

class Angkatan extends Model
{
    protected $table = 'angkatan';

    protected $fillable = [
        'name',
        'tahun_lulus',
        'id_kelompok',
    ];

    protected $casts = [
        'tahun_lulus' => 'datetime',
    ];

    public $timestamps = false;

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'id_kelompok', 'id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_angkatan');
    }
}