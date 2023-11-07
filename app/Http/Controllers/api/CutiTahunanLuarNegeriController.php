<?php

namespace App\Http\Controllers\api;

use App\Helpers\FileHelper;
use App\Models\CutiTahunanLuarNegeri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class CutiTahunanLuarNegeriController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nrp' => 'required',
                'permohonan_tertulis' => 'required|mimes:pdf|max:2048',
                'daftar_riwayathidup' => 'required|mimes:pdf|max:2048',
                'sk_pengangkatan' => 'required|mimes:pdf|max:2048',
                'surat_permohonan1' => 'required|mimes:pdf|max:2048',
                'surat_permohonan2' => 'required|mimes:pdf|max:2048',
            ]);

            $requestfiles = [
                'permohonan_tertulis',
                'daftar_riwayathidup',
                'sk_pengangkatan',
                'surat_permohonan1',
                'surat_permohonan2',
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

            $cutiTahunanLuarNegeri = CutiTahunanLuarNegeri::create($data);

            if($cutiTahunanLuarNegeri){
                return ResponseFormatter::success($cutiTahunanLuarNegeri, 'Successfully.');
            }else{
               return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error([], $e->getMessage(),500);
            }
        

    }
}
