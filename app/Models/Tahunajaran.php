<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahunajaran extends Model
{
    protected $table = 'tahunajaran';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
}