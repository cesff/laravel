<?php
use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji;
        $gaji->nip = 199991;
        $gaji->nama = 'Rizky Syaefuloh';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-laki';
        $gaji->alamat = 'Kp.Pasawahan';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = 250;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 199992;
        $gaji->nama = 'Boces';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-laki';
        $gaji->alamat = 'Permata Kopo';
        $gaji->jabatan = 'Sekretaris';
        $gaji->jam_kerja = 200;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 199993;
        $gaji->nama = 'Bimm';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-laki';
        $gaji->alamat = 'Bermuda';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = 150;
        $gaji->save();
    }
}
