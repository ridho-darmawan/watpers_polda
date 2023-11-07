<?php

namespace App\Http\Controllers\api;

use App\Models\ParQTest;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ParQTestController extends Controller
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
            ]);
           
            $data = [
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'pertanyaan1' => $request->pertanyaan1,
                'pertanyaan2' => $request->pertanyaan2,
                'pertanyaan3' => $request->pertanyaan3,
                'pertanyaan4' => $request->pertanyaan4,
                'pertanyaan5' => $request->pertanyaan5,
                'pertanyaan6' => $request->pertanyaan6,
                'pertanyaan7' => $request->pertanyaan7,
            ];

            $par_q_test = ParQTest::create($data);

            if($par_q_test){
                return ResponseFormatter::success($par_q_test, 'Successfully.');
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

    public function penilaianParQTest($nrp)
    {
        $par_q_test = ParQTest::where('nrp',$nrp)->orderBy('id','desc')->first();

        if(!empty($par_q_test)) {

            $total_nilai_par_q_test = DB::table('par_q')
                ->select(DB::raw('SUM(CASE WHEN pertanyaan1 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan2 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan3 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan4 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan5 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan6 = "iya" THEN 1 ELSE 0 END) +
                                SUM(CASE WHEN pertanyaan7 = "iya" THEN 1 ELSE 0 END) AS jumlah_par_q_test'))
                ->where('id', $par_q_test->id) 
                ->first();

                if($total_nilai_par_q_test->jumlah_par_q_test > 0 ){
                    $penilaian = 'Anda mungkin dapat melakukan aktifitas yang Anda inginkan sepanjang Anda mulai dari perlahan dan ditingkatkan secara perlahan-lahan. Atau Anda harus membatasi aktifitas fisik Anda untuk keamanan. Tanyakan pada dokter Anda aktifitas yang boleh dilakukan dan yang tidak boleh dilakukan.';
                }else {
                    $penilaian = 'Anda boleh melakukan aktifitas fisik yang lebih berat dengan peningkatan secara perlahanlahan. Anda juga boleh mengikuti latihan fitnes secara terprogram dengan selalu memonitor tekanan darah, jika tekanan darah sudah mencapai 144/94 konsultasikan ke dokter sebelum melakukan aktifitas fisik yang lebih berat.';
                }

            return ResponseFormatter::success($penilaian, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
