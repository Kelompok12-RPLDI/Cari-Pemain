<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilaipemain extends Model
{
    use HasFactory;

    protected $table = 'nilai_pemain';

    protected $fillable = [
        'id_pemain',
        'nama_pemain',
        'posisi_pemain',
        'kecepatan',
        'stamina',
        'power',
        'feedback',
    ];
}
