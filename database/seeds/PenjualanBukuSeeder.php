<?php

use App\PenjualanBuku;
use Illuminate\Database\Seeder;

class PenjualanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $penjualan = new PenjualanBuku;
        $penjualan->nama_pembeli = 'Dzikry';
        $penjualan->nama_buku = 'Buku Cerita';
        $penjualan->tanggal_penjualan = '6 Januari 2020';
        $penjualan->harga_buku = 90000;
        $penjualan->jenis_buku = 'Novel';
        $penjualan->save(); 
    }
}
