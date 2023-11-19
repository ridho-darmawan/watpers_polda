<?php

namespace App\Http\Controllers\api;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{

    public function informasiKesehatan()
    {
        //1 = informasi kesehatan
        $informasi_kesehatan = Artikel::where('jenis_artikel',1)->orderBy('id','desc')->paginate(10);

        if(!empty($informasi_kesehatan)) {
            return ResponseFormatter::success($informasi_kesehatan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function informasiKesehatanById($id_artikel)
    {
        $informasi_kesehatan = Artikel::where('id',$id_artikel)->first();

        if(!empty($informasi_kesehatan)) {
            return ResponseFormatter::success($informasi_kesehatan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function programKesejahteraan()
    {
        //3 = program_kesejahteraann
        $program_kesejahteraan = Artikel::where('jenis_artikel',3)->orderBy('id','desc')->paginate(10);

        if(!empty($program_kesejahteraan)) {
            return ResponseFormatter::success($program_kesejahteraan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function programKesejahteraanById($id_artikel)
    {
        $program_kesejahteraan = Artikel::where('id',$id_artikel)->first();

        if(!empty($program_kesejahteraan)) {
            return ResponseFormatter::success($program_kesejahteraan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function rohani()
    {
        //5 = rohani
        $rohani = Artikel::where('jenis_artikel',5)->orderBy('id','desc')->paginate(10);

        if(!empty($rohani)) {
            return ResponseFormatter::success($rohani, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function rohaniById($id_artikel)
    {
        $rohani = Artikel::where('id',$id_artikel)->first();

        if(!empty($rohani)) {
            return ResponseFormatter::success($rohani, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function rekomendasiKebugaran()
    {
        //4 = rekomendasi Kebugaran
        $rekomendasi_kebugaran = Artikel::where('jenis_artikel',4)->orderBy('id','desc')->paginate(10);

        if(!empty($rekomendasi_kebugaran)) {
            return ResponseFormatter::success($rekomendasi_kebugaran, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function rekomendasiKebugaranById($id_artikel)
    {
        $rekomendasi_kebugaran = Artikel::where('id',$id_artikel)->first();

        if(!empty($rekomendasi_kebugaran)) {
            return ResponseFormatter::success($rekomendasi_kebugaran, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function pengecekanKesehatan()
    {
        //2 = pengecekan kesehatan
        $pengecekan_kesehatan = Artikel::where('jenis_artikel',2)->orderBy('id','desc')->paginate(10);

        if(!empty($pengecekan_kesehatan)) {
            return ResponseFormatter::success($pengecekan_kesehatan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function pengecekanKesehatanById($id_artikel)
    {
        $pengecekan_kesehatan = Artikel::where('id',$id_artikel)->first();

        if(!empty($pengecekan_kesehatan)) {
            return ResponseFormatter::success($pengecekan_kesehatan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function kebangsaan()
    {
        //6 = kebangsaan
        $kebangsaan = Artikel::where('jenis_artikel',6)->orderBy('id','desc')->paginate(10);

        if(!empty($kebangsaan)) {
            return ResponseFormatter::success($kebangsaan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }

    public function kebangsaanById($id_artikel)
    {
        $kebangsaan = Artikel::where('id',$id_artikel)->first();

        if(!empty($kebangsaan)) {
            return ResponseFormatter::success($kebangsaan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }

    }
}
