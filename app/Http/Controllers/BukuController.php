<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
    $buku = Buku::select('judul','jumlah_halaman','penerbit')->take(3)->first();
    //$buku = Buku::all();
    return $buku;
    }
    public function hitungbuku(){
    $buku = Buku::count();
    return $buku;
    }
    public function show($id){
        $buku = Buku::find($id);
        return $buku;
        }
    public function buatdata($judul){
    $buku = new Buku();
    $buku->judul = $a;
    $buku->jumlah_halaman = 150;
    $buku->penerbit = 'Purgatory';
    $buku->synopsis = 'Barbarlah Di Brasilia';
    $buku->status = 1;
    $buku->Save();
    return $buku;
    }    
    public function update($id){
        $buku = Buku::find($id);
        $buku->judul = 'Buku Update';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Lorem Ipsum';
        $buku->synopsis = 'CV Lorem Ipsum';
        $buku->status = false;
        $buku->Save();
        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
        }
}
