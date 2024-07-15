<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'ISBN',
        'tahun_terbit',
        'jumlah_buku',
        'tanggal_dipinjam',
        'tanggal_dikembalikan',
        'status'
    ];
}
