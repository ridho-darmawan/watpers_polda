<?php

namespace App\Http\Controllers\api;

use App\Models\TesKebugaran;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TesKebugaranController extends Controller
{

    public function index($id_user)
    {
        $tes_kebugaran = TesKebugaran::where('id_user', $id_user)->orderBy('id','desc')->first();

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
                'id_user' => 'required',
                'jarak' => 'required',  
                'jam' => 'required',
                'menit' => 'required',
                'detik' => 'required',
                'kecepatan' => 'required',
                'jumlah_langkah' => 'required',
            ]);

            $data = [
                'id_user' => $request->id_user,
                'jarak' => $request->jarak,
                'jam' => $request->jam,
                'menit' => $request->menit,
                'detik' => $request->detik,
                'kecepatan' => $request->kecepatan,
                'jumlah_langkah' => $request->jumlah_langkah,
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
