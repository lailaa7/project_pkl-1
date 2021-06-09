<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurcahseOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purcahse_order', function (Blueprint $table) {
            $table->id();
            $table->string('no_PO',50);
            $table->date('tgl_buat');
            $table->dateTime('create_at');
            $table->date('tgl_instalasi');
            $table->string('instansi',50);
            $table->string('status',50);
            $table->string('pic_marketing',50);
            $table->string('pic_teknisi',50);
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
        Schema::dropIfExists('purcahse_order');
    }
}
