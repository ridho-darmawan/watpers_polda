<?php

namespace App\Http\Controllers\api;

use App\Models\KonsultasiKesehatan;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class KonsultasiKesehatanController extends Controller
{

  
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'no_hp' => 'required',
            ]);

            $data = [
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
            ];

            $konsultasi_kesehata = KonsultasiKesehatan::create($data);

            if($konsultasi_kesehata){
                return ResponseFormatter::success(null, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
            }
        

    }
}
