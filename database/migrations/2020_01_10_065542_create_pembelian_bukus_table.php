<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pembeli');
            $table->string('nama_buku');
            $table->string('tanggal_pembelian');
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
        Schema::dropIfExists('pembelian_bukus');
    }
}
