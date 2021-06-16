<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table="transaksi"; 
    public $timestamps = false;
    protected $primaryKey = 'id_transaksi'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'nama_pembeli',
        'id_barang',
        'nama_barang',
        'harga_barang',
        'harga_total',
        'tanggal_transaksi',
    ];


    public function transaksi() 
	{
	     return $this->hasMany('App\Models\Toko','id_transaksi', 'id');
	}
}
