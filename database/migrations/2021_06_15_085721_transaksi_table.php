<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table){
            $table->bigIncrements('id_transaksi');
            $table->string('nama_pembeli');
            $table->integer('id_barang');
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->integer('harga_total');
            $table->date('tanggal_transaksi');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}