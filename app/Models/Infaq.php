<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kelompok;

class Infaq extends Model
{
    protected $table = 'infaq';

    protected $fillable = [
        'name',
        'id_angkatan',
        'id_kelompok',
        'id_tahunajaran',
        'harga',
    ];

    public $timestamps = false;

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'id_kelompok');
    }
}