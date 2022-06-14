<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalpemain extends Model
{
    use HasFactory;
    protected $table = 'jadwal';

    protected $fillable = [
        'id_jadwal',
        'tempat',
        'tanggal',
        'kegiatan',
    ];
}
