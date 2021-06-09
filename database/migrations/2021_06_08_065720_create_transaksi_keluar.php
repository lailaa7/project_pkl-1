<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi',50);
            $table->string('no_PO', 50);
            $table->date('tgl_transaksi');
            $table->dateTime('create_at');
            $table->string('jns_transaksi',50);
            $table->string('instansi',50);
            $table->string('pengirim',50);
            $table->string('penerima',50);
            $table->string('ekpedisi',50);
            $table->string('pic_marketing',50);
            $table->string('pic_teknisi',50);
            $table->string('pic_warehouse',50);
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
        Schema::dropIfExists('transaksi_keluar');
    }
}
