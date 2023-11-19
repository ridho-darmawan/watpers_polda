<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\api\AdlController;
use App\Http\Controllers\api\AmtController;
use App\Http\Controllers\api\GdsController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\ArtikelController;
use App\Http\Controllers\api\VersionController;
use App\Http\Controllers\api\BeladiriController;
use App\Http\Controllers\api\ParQTestController;
use App\Http\Controllers\api\PengajuanController;
use App\Http\Controllers\api\TesKebugaranController;
use App\Http\Controllers\api\JasmaniBerkalaController;
use App\Http\Controllers\api\JenisPengajuanController;
use App\Http\Controllers\api\ProgramKesehatanController;
use App\Http\Controllers\api\KategoriPelayananController;
use App\Http\Controllers\api\KomunitasKesehatanController;
use App\Http\Controllers\api\KonsultasiKesehatanController;
use App\Http\Controllers\api\PengecekanKesehatanController;
use App\Http\Controllers\api\ProgramKesejahteraanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return 'done';
});

Route::get('/optimize', function() {
    Artisan::call('optimize');
    return 'done';
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'done';
});


Route::post('login',[UserController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

    Route::post('logout',[UserController::class,'logout']);
    Route::get('user/profil/{id}',[UserController::class,'profil']);
    Route::post('user/update-profil',[UserController::class,'updateProfil']);
    Route::get('user/foto-profil/{id}',[UserController::class,'getFotoProfil']);

    Route::get('program-kesehatan',[ProgramKesehatanController::class,'index']);
    Route::get('program-kesehatan/{id}',[ProgramKesehatanController::class,'detail']);

    Route::get('program-kesejahteraan',[ProgramKesejahteraanController::class,'index']);
    Route::get('program-kesejahteraan/{id}',[ProgramKesejahteraanController::class,'detail']);

    Route::get('pengecekan-kesehatan',[PengecekanKesehatanController::class,'index']);
    Route::get('pengecekan-kesehatan/{id}',[PengecekanKesehatanController::class,'detail']);

    Route::get('beladiri/{id}',[BeladiriController::class,'index']);

    Route::get('tes-kebugaran/{id}',[TesKebugaranController::class,'index']);
    Route::post('tes-kebugaran',[TesKebugaranController::class,'store']);

    Route::get('komunitas-kesehatan',[KomunitasKesehatanController::class,'index']);
    Route::get('komunitas-kesehatan/{id}',[KomunitasKesehatanController::class,'detail']);

    // Route::post('parq',[ParQTestController::class,'store']);
    // Route::get('penilaian-parq-test/{nrp}',[ParQTestController::class,'penilaianParQTest']);

    Route::post('amt',[AmtController::class,'store']);
    Route::get('penilaian-amt/{id_user}',[AmtController::class,'penilaianAmt']);

    Route::post('adl',[AdlController::class,'store']);
    Route::get('penilaian-adl/{id_user}',[AdlController::class,'penilaianAdl']);

    Route::post('gds',[GdsController::class,'store']);
    Route::get('penilaian-gds/{id_user}',[GdsController::class,'penilaianGds']);

    Route::post('konsultasi-kesehatan',[KonsultasiKesehatanController::class,'store']);

    Route::get('jasmani-berkala/{id_user}',[JasmaniBerkalaController::class,'index']);
    Route::get('kategori-pelayanan',[KategoriPelayananController::class,'index']);
    Route::get('jenis-pengajuan',[JenisPengajuanController::class,'index']);
    Route::get('jenis-pengajuan-by-kategori/{id_kategori}',[JenisPengajuanController::class,'jenisPengajuanByKategori']);
    Route::get('jenis-pengajuan/{id}',[JenisPengajuanController::class,'jenisPengajuanById']);
    Route::post('pengajuan',[PengajuanController::class,'store']);
    Route::get('riwayat-pengajuan/{id_user}',[PengajuanController::class,'riwayatPengajuan']);
    Route::get('progres-pengajuan/{id_pengajuan}',[PengajuanController::class,'progresPengajuan']);

    Route::get('artikel/informasi-kesehatan',[ArtikelController::class,'informasiKesehatan']);
    Route::get('artikel/informasi-kesehatan/{id_artikel}',[ArtikelController::class,'informasiKesehatanById']);
    Route::get('artikel/program-kesejahteraan',[ArtikelController::class,'programKesejahteraan']);
    Route::get('artikel/program-kesejahteraan/{id_artikel}',[ArtikelController::class,'programKesejahteraanById']);
    Route::get('artikel/rohani',[ArtikelController::class,'rohani']);
    Route::get('artikel/rohani/{id_artikel}',[ArtikelController::class,'rohaniById']);
    Route::get('artikel/rekomendasi-kebugaran',[ArtikelController::class,'rekomendasiKebugaran']);
    Route::get('artikel/rekomendasi-kebugaran/{id_artikel}',[ArtikelController::class,'rekomendasiKebugaranById']);
    Route::get('artikel/pengecekan-kesehatan',[ArtikelController::class,'pengecekanKesehatan']);
    Route::get('artikel/pengecekan-kesehatan/{id_artikel}',[ArtikelController::class,'pengecekanKesehatanById']);
    Route::get('artikel/kebangsaan',[ArtikelController::class,'kebangsaan']);
    Route::get('artikel/kebangsaan/{id_artikel}',[ArtikelController::class,'kebangsaanById']);

});



