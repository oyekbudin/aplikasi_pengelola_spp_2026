<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SambutCon;
use App\Http\Controllers\PengaturanCon;
use App\Http\Controllers\GuruCon;
use App\Http\Controllers\WaliCon;
use App\Http\Controllers\SiswaCon;
use App\Http\Controllers\InfaqCon;



/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Koneksi database berhasil";
    } catch (\Exception $e) {
        return "Koneksi database gagal: " . $e->getMessage();
    }
});

//SambutCon
Route::get('/', [SambutCon::class, 'masukwali'])->name('masukwali');
Route::get('/masukguru', [SambutCon::class, 'masukguru'])->name('masukguru');
Route::post('/cekmasukguru', [GuruCon::class, 'cekmasukguru'])->name('cekmasukguru');
Route::get('/keluar', [SambutCon::class, 'keluar'])->name('keluar');

Route::middleware(['cekmasukguru'])->group(function () {

//PengaturanCon
Route::get('/pengaturan', [PengaturanCon::class, 'pengaturan'])->name('pengaturan');
Route::post('/pengaturan/banner', [PengaturanCon::class, 'updateBanner']);

//GuruCon

Route::post('/ruangguru', [GuruCon::class, 'ruangguru'])->name('ruangguru');
Route::get('/ruangguru', [GuruCon::class, 'ruangguru'])->name('ruangguru');
Route::get('/dataguru', [GuruCon::class, 'dataguru'])->name('dataguru');
Route::get('/tambahguru', [GuruCon::class, 'dataguru_tambah'])->name('dataguru_tambah');
Route::post('/simpanguru', [GuruCon::class, 'dataguru_simpan'])->name('dataguru_simpan');
Route::post('/hapusguru/{id}', [GuruCon::class, 'hapus']);
Route::get('/editguru/{id}', [GuruCon::class, 'edit']);
Route::post('/updateguru/{id}', [GuruCon::class, 'update']);

//WaliCon
Route::post('/ruangwali', [WaliCon::class, 'ruangwali'])->name('ruangwali');

//SiswaCon
Route::get('/datasiswa', [SiswaCon::class, 'index'])->name('index');
Route::get('/datasiswa/angkatan/{id}', [SiswaCon::class, 'byAngkatan'])->name('siswa.angkatan');

Route::get('/tambahangkatan', [SiswaCon::class, 'angkatan_tambah'])->name('angkatan_tambah');
Route::post('/simpanangkatan', [SiswaCon::class, 'angkatan_simpan'])->name('angkatan_simpan');

Route::post('/naikkelas', [SiswaCon::class, 'naikkelas']);


Route::get('/tambahsiswa/{id}', [SiswaCon::class, 'datasiswa_tambah']);
Route::post('/simpansiswa', [SiswaCon::class, 'datasiswa_simpan']);
Route::post('/hapussiswa/{id}', [SiswaCon::class, 'hapus']);
Route::get('/editsiswa/{id}', [SiswaCon::class, 'edit']);
Route::post('/updatesiswa/{id}', [SiswaCon::class, 'update']);

//InfaqCon
Route::get('/datainfaq', [InfaqCon::class, 'index'])->name('index');
Route::get('/datainfaq/tahunajaran/{id}', [InfaqCon::class, 'byTahunajaran'])->name('infaq.tahunajaran');

Route::get('/tambahinfaq/{id}', [InfaqCon::class, 'datainfaq_tambah']);
Route::post('/simpaninfaq', [InfaqCon::class, 'datainfaq_simpan']);
Route::post('/hapusinfaq/{id}', [InfaqCon::class, 'hapus']);
Route::get('/editinfaq/{id}', [InfaqCon::class, 'edit']);
Route::post('/updateinfaq/{id}', [InfaqCon::class, 'update']);

});