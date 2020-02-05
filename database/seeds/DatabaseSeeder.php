<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(PeminjamanBukuSeeder::class);
        $this->call(PembelianBukuSeeder::class);
        $this->call(PenjualanBukuSeeder::class);
        $this->call(GajiSeeder::class);

    }
}
