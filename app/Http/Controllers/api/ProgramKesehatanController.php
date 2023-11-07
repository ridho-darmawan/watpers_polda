<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\ProgramKesehatan;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProgramKesehatanController extends Controller
{
    public function index()
    {
        $programKesehetan = ProgramKesehatan::orderBy('id','DESC')->get();

        if($programKesehetan)
        {
            return ResponseFormatter::success($programKesehetan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }

    public function detail($id)
    {
        $detailProgramKesehetan = ProgramKesehatan::find($id);

        if($detailProgramKesehetan)
        {
            return ResponseFormatter::success($detailProgramKesehetan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }
}
