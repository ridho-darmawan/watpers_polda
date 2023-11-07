<?php

namespace App\Http\Controllers\api;

use App\Models\Adl;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdlController extends Controller
{   
  
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'pertanyaan1' => 'required',
                'pertanyaan2' => 'required',
                'pertanyaan3' => 'required',
                'pertanyaan4' => 'required',
                'pertanyaan5' => 'required',
                'pertanyaan6' => 'required',
                'pertanyaan7' => 'required',
                'pertanyaan8' => 'required',
                'pertanyaan9' => 'required',
                'pertanyaan10' => 'required',
            ]);
           
            $data = [
                'id_user' => $request->id_user,
                'pertanyaan1' => $request->pertanyaan1,
                'pertanyaan2' => $request->pertanyaan2,
                'pertanyaan3' => $request->pertanyaan3,
                'pertanyaan4' => $request->pertanyaan4,
                'pertanyaan5' => $request->pertanyaan5,
                'pertanyaan6' => $request->pertanyaan6,
                'pertanyaan7' => $request->pertanyaan7,
                'pertanyaan8' => $request->pertanyaan8,
                'pertanyaan9' => $request->pertanyaan9,
                'pertanyaan10' => $request->pertanyaan10,
            ];

            $adl = Adl::create($data);

            if($adl){
                return ResponseFormatter::success($adl, 'Successfully.');
            }else{
                return ResponseFormatter::error([
                    'message' => 'Gagal Save',
                    'error' => $error,
                ], null,500);
            }
            } catch (\Throwable $e) {
                 return ResponseFormatter::error([], $e->getMessage(),500);
            }
        

    }

    public function penilaianAdl($id_user)
    {
        $adl = Adl::where('id_user',$id_user)->orderBy('id','desc')->first();

        if(!empty($adl)) {

            $total_nilai_adl = $adl->pertanyaan1 + $adl->pertanyaan2 + $adl->pertanyaan3 + $adl->pertanyaan4 + $adl->pertanyaan5 + $adl->pertanyaan6 + $adl->pertanyaan7 + $adl->pertanyaan8 + $adl->pertanyaan9 + $adl->pertanyaan10;

                if($total_nilai_adl <= 4 ){
                    $nilai_adl = 'Ketergantungan total (C)';
                }elseif ($total_nilai_adl <= 8 ) {
                   $nilai_adl = 'Ketergantungan berat (C)';
                }elseif ($total_nilai_adl <= 11 ) {
                   $nilai_adl = ' Ketergantungan sedang (B)';
                }elseif ($total_nilai_adl <= 19 ) {
                   $nilai_adl = ' Ketergantungan ringan (B)';
                }else{
                    $nilai_adl = 'Mandiri (A)';
                }

            return ResponseFormatter::success($nilai_adl, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
