<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\PengecekanKesehatan;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class PengecekanKesehatanController extends Controller
{
    public function index()
    {
        $pengecekan = PengecekanKesehatan::orderBy('id','DESC')->get();

        if($pengecekan)
        {
            return ResponseFormatter::success($pengecekan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }

    public function detail($id)
    {
        $detailPengecekan = PengecekanKesehatan::find($id);

        if($detailPengecekan)
        {
            return ResponseFormatter::success($detailPengecekan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }
}
