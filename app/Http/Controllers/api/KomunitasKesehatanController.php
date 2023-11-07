<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Models\KomunitasKesehatan;
use App\Http\Controllers\Controller;

class KomunitasKesehatanController extends Controller
{
    public function index()
    {
        $komunitas_kesehatan = KomunitasKesehatan::orderBy('id','DESC')->paginate(10);

        if($komunitas_kesehatan)
        {
            return ResponseFormatter::success($komunitas_kesehatan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }

    public function detail($id)
    {
        $detail_komunitas_kesehatan = KomunitasKesehatan::find($id);

        if($detail_komunitas_kesehatan)
        {
            return ResponseFormatter::success($detail_komunitas_kesehatan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }
}
