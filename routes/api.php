<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AdlController;
use App\Http\Controllers\api\AmtController;
use App\Http\Controllers\api\GdsController;
use App\Http\Controllers\api\KgbController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\ArtikelController;
use App\Http\Controllers\api\VersionController;
use App\Http\Controllers\api\BeladiriController;
use App\Http\Controllers\api\ParQTestController;
use App\Http\Controllers\api\CutiSakitController;
use App\Http\Controllers\api\IzinCeraiController;
use App\Http\Controllers\api\IzinNikahController;
use App\Http\Controllers\api\IzinRujukController;
use App\Http\Controllers\api\KebugaranController;
use App\Http\Controllers\api\PengajuanController;
use App\Http\Controllers\api\SuratMasukController;
use App\Http\Controllers\api\CutiTahunanController;
use App\Http\Controllers\api\StatusGugurController;
use App\Http\Controllers\api\CutiIstimewaController;
use App\Http\Controllers\api\TesKebugaranController;
use App\Http\Controllers\api\JasmaniBerkalaController;
use App\Http\Controllers\api\JenisPengajuanController;
use App\Http\Controllers\api\PenghargaanPolriController;
use App\Http\Controllers\api\ProgramKesehatanController;
use App\Http\Controllers\api\KategoriPelayananController;
use App\Http\Controllers\api\KomunitasKesehatanController;
use App\Http\Controllers\api\KonsultasiKesehatanController;
use App\Http\Controllers\api\PengecekanKesehatanController;
use App\Http\Controllers\api\ProgramKesejahteraanController;
use App\Http\Controllers\api\CutiTahunanLuarNegeriController;
use App\Http\Controllers\api\PerjalananDinasMutasiController;
use App\Http\Controllers\api\PengajuanTandaKehormatanController;

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

Route::post('login',[UserController::class,'login']);
Route::get('versi',[VersionController::class,'index']);

Route::middleware('auth:sanctum')->group(function(){

    Route::post('logout',[UserController::class,'logout']);
    Route::get('user/profil/{id}',[UserController::class,'profil']);
    Route::post('user/update-profil',[UserController::class,'updateProfil']);
    Route::get('user/foto-profil/{id}',[UserController::class,'getFotoProfil']);

    Route::post('izin-nikah/store',[IzinNikahController::class,'store']);

    Route::post('izin-cerai/store',[IzinCeraiController::class,'store']);

    Route::post('izin-rujuk/store',[IzinRujukController::class,'store']);

    Route::post('kgb/store',[KgbController::class,'store']);

    Route::post('status-gugur/store',[StatusGugurController::class,'store']);

    Route::post('perjalanan-dinas/store',[PerjalananDinasMutasiController::class,'store']);

    Route::post('tanda-kehormatan/store',[PengajuanTandaKehormatanController::class,'store']);

    Route::post('penghargaan-polri/store',[PenghargaanPolriController::class,'store']);

    Route::post('cuti-tahunan/store',[CutiTahunanController::class,'store']);

    Route::post('cuti-istimewa/store',[CutiIstimewaController::class,'store']);

    Route::post('cuti-sakit/store',[CutiSakitController::class,'store']);

    Route::get('program-kesehatan',[ProgramKesehatanController::class,'index']);    
    Route::get('program-kesehatan/{id}',[ProgramKesehatanController::class,'detail']);

    Route::get('program-kesejahteraan',[ProgramKesejahteraanController::class,'index']);    
    Route::get('program-kesejahteraan/{id}',[ProgramKesejahteraanController::class,'detail']);

    Route::get('pengecekan-kesehatan',[PengecekanKesehatanController::class,'index']);    
    Route::get('pengecekan-kesehatan/{id}',[PengecekanKesehatanController::class,'detail']);

    Route::get('surat-masuk/{id}',[SuratMasukController::class,'index']);
    Route::get('surat-belum-baca/{id_user}',[SuratMasukController::class,'getSuratBelumBaca']);
    Route::post('update-status-read',[SuratMasukController::class,'updateStatusRead']);

    Route::get('beladiri/{id}',[BeladiriController::class,'index']);

    Route::get('kebugaran/{id}',[KebugaranController::class,'index']);
    Route::post('kebugaran',[KebugaranController::class,'store']);

    Route::get('tes-kebugaran/{id}',[TesKebugaranController::class,'index']);
    Route::post('tes-kebugaran',[TesKebugaranController::class,'store']);

    Route::get('komunitas-kesehatan',[KomunitasKesehatanController::class,'index']);
    Route::get('komunitas-kesehatan/{id}',[KomunitasKesehatanController::class,'detail']);

    Route::post('parq',[ParQTestController::class,'store']);
    Route::get('penilaian-parq-test/{nrp}',[ParQTestController::class,'penilaianParQTest']);

    Route::post('amt',[AmtController::class,'store']);
    Route::get('penilaian-amt/{nrp}',[AmtController::class,'penilaianAmt']);

    Route::post('adl',[AdlController::class,'store']);
    Route::get('penilaian-adl/{nrp}',[AdlController::class,'penilaianAdl']);

    Route::post('gds',[GdsController::class,'store']);
    Route::get('penilaian-gds/{nrp}',[GdsController::class,'penilaianGds']);

    Route::post('cuti-tahunan-luar-negeri',[CutiTahunanLuarNegeriController::class,'store']);

    Route::post('konsultasi-kesehatan',[KonsultasiKesehatanController::class,'store']);

    // ===========

    Route::get('jasmani-berkala/{id_user}',[JasmaniBerkalaController::class,'index']);
    Route::get('kategori-pelayanan',[KategoriPelayananController::class,'index']);
    Route::get('jenis-pengajuan',[JenisPengajuanController::class,'index']);
    Route::post('pengajuan',[PengajuanController::class,'store']);
    Route::get('riwayat-pengajuan/{id_user}',[PengajuanController::class,'riwayatPengajuan']);
    Route::get('progres-pengajuan/{id_pengajuan}',[PengajuanController::class,'progresPengajuan']);
    
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
    

    

});



