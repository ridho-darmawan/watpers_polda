<?php

namespace App\Http\Controllers\api;

use App\Models\Kebugaran;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class KebugaranController extends Controller
{

    public function index($nrp)
    {
        $kebugaran = Kebugaran::where('nrp', $nrp)->orderBy('id','desc')->first();

        if($kebugaran)
        {
            $berat = $kebugaran->berat;
            $tinggi_meter = $kebugaran->tinggi/100;
            //BMI = berat massa ideal

            $BMI = number_format($berat / ($tinggi_meter^2),2);

            if($BMI < 18.5) {
                $status_bmi = 'underweight';
            }elseif($BMI <= 24.9){
                $status_bmi  = 'Normal';
            }elseif($BMI <= 29.9){
                $status_bmi  = 'overweight';
            }else{
                $status_bmi = 'Obesitas';
            }

            $kebugaran['status_imt'] = $status_bmi;
            $kebugaran['nilai_imt'] = $BMI;

            return ResponseFormatter::success($kebugaran, 'Successfully.');
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
                'tinggi' => 'required',
                'berat' => 'required',  
            ]);

            $data = [
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'tinggi' => $request->tinggi,
                'berat' => $request->berat,
                'gula_darah' => $request->gula_darah,
                'tekanan_darah' => $request->tekanan_darah,
                'kolestrol' => $request->berat,
            ];

            $kebugaran = Kebugaran::create($data);

            if($kebugaran){
                return ResponseFormatter::success(null, 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
            }
        

    }
}
