<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
    $buku = Buku::all();
    return view('buku.index',compact('buku'));
    }

    public function show($id){
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }

    public function hitungbuku(){
    $buku = Buku::count();
    return $buku;
    }

    public function buatdata($a){
    $buku = new Buku();
    $buku->judul = $a;
    $buku->jumlah_halaman = 150;
    $buku->penerbit = 'Purgatory';
    $buku->synopsis = 'Barbarlah Di Brasilia';
    $buku->status = 1;
    $buku->Save();
    return $buku;
    }
    public function update($id,$a){
        $buku = Buku::find($id);
        $buku->judul = $a;
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Lorem Ipsum';
        $buku->synopsis = 'CV Lorem Ipsum';
        $buku->status = 1;
        $buku->Save();
        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
        }
}
