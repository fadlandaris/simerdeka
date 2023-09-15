<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswa';

    protected $fillable = [
        'nama',
        'nim',
        'nama_kegiatan',
        'whatsapp',
        'nama_prodi',
        'progress',
    ];

    protected $cast = [
        //'progress' => 'array'
    ];
};
