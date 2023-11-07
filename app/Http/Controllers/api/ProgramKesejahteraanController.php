<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\ProgramKesejahteraan;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProgramKesejahteraanController extends Controller
{
    public function index()
    {
        $program = ProgramKesejahteraan::orderBy('id','DESC')->get();

        if($program)
        {
            return ResponseFormatter::success($program, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }

    public function detail($id)
    {
        $detailProgram = ProgramKesejahteraan::find($id);

        if($detailProgram)
        {
            return ResponseFormatter::success($detailProgram, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }

    }
}
