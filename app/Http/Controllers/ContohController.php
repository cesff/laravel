<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan(){
        return 'Ini Contoh Latihan Controller';
    }

    public function latihan2(){
        $a = 'Rizky';
        $b = 'Syaefuloh';
        return 'Nama Saya : '.$a.' '.$b;
    }

    public function latihan3(){
        $a = 'Boces';
        return view('test',compact('a'));
    }
    public function latihan4(){
        $a = 'Bey';
        return view('test2',['nama' => $a]);
    }
    public function biodata(){
        $a = 'Rizky Syaefuloh';
        $b = 'Islam';
        $c = 'Laki-laki';
        $d = 'Kp.Pasawahan';
        $e = 'SMK Assalaam';
        $f = 'XI RPL 3';
        $g = 'RPL';
        $h = 'Gaming';
        $i = 'Besok 17 tahun';
        return view('biodata',['nama' => $a,'agama' => $b,'jk' => $c,
        'alamat' => $d, 'sekolah' => $e, 'kelas' => $f, 'jurusan' => $g,
        'hobi' => $h, 'umur' => $i]);

    }
    public function pesan($a='Nasi Uduk'){
    return view('menu',compact('a'));
    }

    public function pesan2($a=null,$b=null,$c=null){
        if(isset($a)){
            $a = 'Anda memesan '.$a;
        }
        if(isset($b)){
            $b = '& '.$b;
        }
        if(isset($c)){
            if($c >= 25000){
            $c = ', Ukuran Pesanan Anda Large';     
            }
            else if($c < 25000 && $c > 15000){
            $c = ', Ukuran Pesanan Anda Medium';     
                }
            else if($c <= 15000 && $c > 0){
                $c = ', Ukuran Pesanan Anda Small';
            } 
            else{
                $c = ', Harga Tidak Sesuai';
            }   
        }
        if(!isset($a)){
        $a = 'Anda Belum Memesan Sesuatu';
        }
        return view('mao',compact('a','b','c'));
    }
}


