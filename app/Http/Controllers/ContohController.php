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

}
