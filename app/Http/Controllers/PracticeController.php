<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //passing data
    public function pass(){
        $nama = 'Bimm';
        $alamat = 'Rumah 7';
        return view('latihan',compact('nama','alamat'));
    }

    public function pass1(){
        $gaji = 2000000;
        return view('latihan1',['penghasilan'=>$gaji]);
    }

    //passing data parameter
    public function status($status='Jomlo'){
        return view('latihan2',compact('status'));
    }

    public function loop(){
        $buku = [
            ['judul'=>'Bangkit Dari Remedial','penerbit'=>'Erlangga',
            'harga'=>100000,'penulis'=>'Aku Yang Suka Remedial'
            ],
            ['judul'=>'Tips Move On Dari Kamu','penerbit'=>'Erlangga',
            'harga'=>150000,'penulis'=>'Bimm'
            ],
            ['judul'=>'Kekuatan 1/3 Malam','penerbit'=>'Erlangga',
            'harga'=>250000,'penulis'=>'Mutia'
            ],
        ];
        return view('latihan3',compact('buku'));
    }
}
