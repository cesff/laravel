<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku;
        $buku->judul = 'Belajar PHP';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah.....';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar PHP 2';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah.....';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar PHP 3';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah.....';
        $buku->status = 1;
        $buku->save();
    }
}
