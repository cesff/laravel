<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
use App\Mahasiswa;
use App\Dosen;
use App\Wali;
use App\Hobi;

Route::get('/', function () {
    return Buku::all();
});

Route::get('pesan', function(){
    return 'Halo ini Halaman Pesan';
});
Route::get('Bola', function(){
    return 'Persib VS Persija';
});
Route::get('Tekno', function () {
    return 'Teknologi Semakin Berkembang';
});
Route::get('berita', function () {
    return 'ini halaman berita';
});
Route::get('variable', function () {
    $data1= 'Ini Variable Data 1';
    $data2= 'Ini Variable Data 2';
    $data3= 'Ini Variable Data 3';
    $data4= 'Ini Variable Data 4';
    $data5= 'Ini Variable Data 5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});
Route::get('angkot/{jurusan}', function () {
    $jurusan = 'Cibaduyut - Karang Setra';
    $data = 'Angkot Jurusan:';
    return $data .' '.$jurusan;
});
Route::get('angkot/{jurusan}/{jadwal}',function(){
    $jurusan = 'Cibaduyut - Karang Setra';
    $data = 'Angkot Jurusan:';
    $jadwal ='Berangkat Jam 07:00 WIB';
    return $data .' '.$jurusan.' '.$jadwal;
});
Route::get('users/{nama}/{alamat}/{nomor}', function ($nama,$alamat,$nomor) {
    return 'Halo ' .$nama.' Yang Beralamat Di '.$alamat.' Nomor HP '.$nomor;
});
Route::get('siswa/{nama}/{nilai?}', function ($nama,$nilai = ' Belum Memiliki Nilai') {
    if($nilai > 50 ){
        $grade= 'Grade Anda A';
    }
    elseif($nilai <= 50 && $nilai > 40){
        $grade= 'Grade Anda B';
    }
    elseif($nilai <= 40 && $nilai > 30){
        $grade= 'Grade Anda C';
    }
    elseif($nilai <= 30 && $nilai > 20){
        $grade= 'Grade Anda D';
    }
    elseif($nilai <= 20 && $nilai >= 1){
        $grade= 'Grade Anda E';
    }
    else{
        $grade= 'Dan Tidak Memiliki Grade';
    }
    return 'Halo : '.$nama.'<br> '.$nilai.'<br> '.$grade;
});

Route::get('contoh','ContohController@latihan');
Route::get('profile','ContohController@latihan2');
Route::get('profile2','ContohController@latihan3');
Route::get('profile3','ContohController@latihan4');
Route::get('biodata','ContohController@biodata');

Route::get('menu/{makan?}','ContohController@pesan');
Route::get('mao/{makan?}/{makan2?}/{harga?}','ContohController@pesan2');

//Crud
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');
Route::get('buatdata/{judul}','BukuController@buatdata');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}/{judul}','BukuController@update');

Route::get('hitung-buku','BukuController@hitungbuku');


Route::get('get-siswa','SiswaController@index');
Route::get('buatdata/{nama}/{nis}','SiswaController@buatdata');
Route::get('get-siswa/{id}','SiswaController@show');
Route::get('delete-siswa/{id}','SiswaController@delete');
Route::get('update-siswa/{id}/{nama}/{nis}','SiswaController@update');

//passing data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');

//passing data parameter
Route::get('status/{a?}','PracticeController@status');

//looping
Route::get('buku','PracticeController@loop');

Route::get('uang','GajiController@index');
Route::get('uang/{id}','GajiController@show');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('relasi-1', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;

});

Route::get('relasi-2', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function() {

    # Temukan dosen dengan yang bernama Yulianto
    $dosen = Dosen::where('nama', '=', 'Yulianto')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4', function() {

    # Bila kita ingin melihat hobi saya
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
    # Tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp)
        echo '<li>' . $temp->hobi . '</li>';
});

Route::get('relasi-5', function() {

    # Temukan hobi Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    # Tampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';

});

Route::get('eloquent', function() {

    # Ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    # Kirim variabel ke View
    return view('eloquent', compact('mahasiswa'));
});
