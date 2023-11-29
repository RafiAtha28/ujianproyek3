<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;

    protected $table = 'barang';

    protected $fillable = [
        'namaBarang',
        'satuan',
        'hargaSatuan',
        'stok',
        // tambahkan kolom lain yang diperlukan
    ];
}