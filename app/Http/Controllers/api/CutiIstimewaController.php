<?php

namespace App\Http\Controllers\api;

use App\Helpers\FileHelper;
use Illuminate\Support\Str;
use App\Models\CutiIstimewa;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class CutiIstimewaController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nrp' => 'required',
                'permohonan_tertulis' => 'required|mimes:pdf|max:2048',
                'smk_terakhir' => 'required|mimes:pdf|max:2048',
                'surat_perintahatugas' => 'required|mimes:pdf|max:2048',
                'pesyaratan_pegawai' => 'mimes:pdf|max:2048',
            ]);

            $requestFieldFile = [
                //'file request'
                'permohonan_tertulis',
                'smk_terakhir' ,
                'surat_perintahatugas',
                'pesyaratan_pegawai',
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

            $cutiIstimewa = CutiIstimewa::create($data);

            if($cutiIstimewa){
                return ResponseFormatter::success($cutiIstimewa, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
            }
        

    }
}
