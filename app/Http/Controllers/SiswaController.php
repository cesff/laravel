<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return $siswa;
    }

    public function buatdata($a,$i){
        $siswa = new Siswa();
        $siswa->nama = $a;
        $siswa->nis = $i;
        $siswa->jurusan = 'Rekaya Perangkat Lunak';
        $siswa->kelas = 'XI RPL 3';
        $siswa->alamat = 'Bandung';
        $siswa->tgl_lahir = '2020-01-15';
        $siswa->Save();
        return $siswa;
    }

    public function show($id){
        $siswa = Siswa::find($id);
        return $siswa;
    }

        public function update($id,$a,$i){
            $siswa = Siswa::find($id);
            $siswa->nama = $a;
            $siswa->nis = $i;
            $siswa->jurusan = 'Rekaya Perangkat Lunak';
            $siswa->kelas = 'XI RPL 3';
            $siswa->alamat = 'Bandung';
            $siswa->tgl_lahir = '2020-01-15';
            $siswa->Save();
            return $siswa;
        }

        public function delete($id){
            $siswa = Siswa::find($id);
            $siswa->delete();
            return $siswa;
            }
}
