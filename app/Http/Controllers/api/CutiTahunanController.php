<?php

namespace App\Http\Controllers\api;

use App\Helpers\FileHelper;
use App\Models\CutiTahunan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class CutiTahunanController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nrp' => 'required',
                'permohonan_tertulis' => 'required|mimes:pdf|max:2048',
                'smk_terakhir' => 'required|mimes:pdf|max:2048',
                'rekomendasi_atasan' => 'required|mimes:pdf|max:2048',
            ]);

            $requestfiles = [
                //'file request' 
                'permohonan_tertulis',
                'smk_terakhir',
                'rekomendasi_atasan',
            ];

            $data = [
                'nama' => $validatedData['nama'],
                'nrp' => $validatedData['nrp'],
            ];

            foreach ($requestfiles as $field) {

                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $fileName = FileHelper::storeFile($file, $field, $validatedData['nrp']);
                    $data[$field] = $fileName;
                }
               
            }

            $cutiTahunan = CutiTahunan::create($data);

            if($cutiTahunan){
                return ResponseFormatter::success(null, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
            }
        

    }
}
