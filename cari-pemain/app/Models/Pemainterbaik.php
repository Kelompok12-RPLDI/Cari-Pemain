<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemainterbaik extends Model
{
    use HasFactory;

    protected $table = 'pemainterbaik';

    protected $fillable = [
        'id',
        'nama_pemain',
        'posisi_pemain',
    ];
}
