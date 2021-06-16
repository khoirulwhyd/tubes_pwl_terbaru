<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //Model Eloquent
  
class Toko extends Model //Definisi Model
{
    
    protected $table="barang"; 
    public $timestamps = false;
    protected $primaryKey = 'Id'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable. * 
    *
    * @var array
    */
    protected $fillable = [
        'nama',
        'foto',
        'satuan',
        'harga',
        'stok',
    ];

    public function transaksi() 
	{
	     return $this->hasMany('App\Models\Transaksi','id_transaksi', 'id');
	}
};