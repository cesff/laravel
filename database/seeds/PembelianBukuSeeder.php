<?php

use App\PembelianBuku;
use Illuminate\Database\Seeder;

class PembelianBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = new PembelianBuku;
        $pembelian->nama_pembeli = 'Rizky Syaefuloh';
        $pembelian->nama_buku = 'Matematika';
        $pembelian->tanggal_pembelian = '29 Desember 2019';
        $pembelian->harga_buku = '55000';
        $pembelian->jenis_buku = 'Perhitungan';
        $pembelian->save();  
    }
}
