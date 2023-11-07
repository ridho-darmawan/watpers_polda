<?php

namespace App\Http\Controllers\api;

use App\Models\CutiSakit;
use App\Helpers\FileHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class CutiSakitController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nrp' => 'required',
                'pemberitahuan_bersangkutan' => 'mimes:pdf|max:2048',
                'rekomendasi_atasan' => 'mimes:pdf|max:2048',
                'surat_keterangansakit' => 'required|mimes:pdf|max:2048',
            ]);

            $requestFieldFile = [
                //'file request'
                'pemberitahuan_bersangkutan',
                'rekomendasi_atasan',
                'surat_perintahatugas', 
                'surat_keterangansakit',
            ];

            $data = [
                'nama' => $validatedData['nama'],
                'nrp' => $validatedData['nrp'],
            ];

            foreach ($requestFieldFile as $field) {

                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $fileName = FileHelper::storeFile($file, $field, $validatedData['nrp']);
                    $data[$field] = $fileName;
                }
               
            }

            $cutiSakit = CutiSakit::create($data);

            if($cutiSakit){
                return ResponseFormatter::success($cutiSakit, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
            }
        

    }
}
