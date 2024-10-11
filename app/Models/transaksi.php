<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tanggal Transaksi',
        'Nama Pembeli',
        'Jumlah Barang Yang Di Beli',
        'Total Harga',
    ];
}
