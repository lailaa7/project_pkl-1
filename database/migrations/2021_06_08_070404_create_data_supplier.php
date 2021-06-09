<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('kode_supplier',50);
            $table->string('telp_supplier',50);
            $table->string('email_supplier',50);
            $table->string('pic_supplier',50);
            $table->string('nama_supplier',50);
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
        Schema::dropIfExists('data_supplier');
    }
}
