<?php

use App\PeminjamanBuku;
use Illuminate\Database\Seeder;

class PeminjamanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peminjaman = new PeminjamanBuku;
        $peminjaman->nama_peminjaman = 'Rizky Syefuloh';
        $peminjaman->nama_buku = 'B.Indonesia';
        $peminjaman->tanggal_peminjaman = '10 Januari 2019';
        $peminjaman->lama_peminjaman = 3;
        $peminjaman->jenis_buku = 'Pengetahuan';
        $peminjaman->save();
    }
}
