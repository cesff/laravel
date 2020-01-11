<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pembeli');
            $table->string('nama_buku');
            $table->string('tanggal_penjualan');
            $table->integer('harga_buku');
            $table->string('jenis_buku');
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
        Schema::dropIfExists('penjualan_bukus');
    }
}
