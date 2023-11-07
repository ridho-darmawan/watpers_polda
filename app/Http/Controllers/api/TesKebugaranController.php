<?php

namespace App\Http\Controllers\api;

use App\Models\TesKebugaran;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TesKebugaranController extends Controller
{

    public function index($nrp)
    {
        $tes_kebugaran = TesKebugaran::where('nrp', $nrp)->orderBy('id','desc')->first();

        if($tes_kebugaran)
        {
            return ResponseFormatter::success($tes_kebugaran, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Tidak Ditemukan ',400);
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nrp' => 'required',
                'waktu' => 'required',
                'jarak' => 'required',  
            ]);

            $data = [
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'waktu' => $request->waktu,
                'jarak' => $request->jarak,
            ];

            $tes_kebugaran = TesKebugaran::create($data);

            if($tes_kebugaran){
                return ResponseFormatter::success(null, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
            }
        

    }
}
