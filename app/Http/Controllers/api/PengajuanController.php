<?php

namespace App\Http\Controllers\api;

use App\Models\Pengajuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProgresPengajuan;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{

    public function store(Request $request)
    {

        try {

              $validatedData = $request->validate([
                'id_user' => 'required',
                'id_jenis_pengajuan' => 'required',
                'file_syarat.*' => 'required|file|mimes:pdf,jpg,png|max:2048',

            ]);


            $input = [
                'id_user' => $request->id_user,
                'id_jenis_pengajuan' => $request->id_jenis_pengajuan
            ];

            if($request->hasFile('file_syarat'))
            {
                $file_syarat = [];
                $files = $request->file('file_syarat');

                foreach ($files as $file) {

                    $fileNameWithoutExtension = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $fileName = $fileNameWithoutExtension .'-'. Str::random(3) . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('efile', $fileName, 'public');

                    $file_syarat[] = $fileName;

                }
            }

            $input['file_syarat'] = json_encode($file_syarat);

            $pengajuan = Pengajuan::create($input);

            if($pengajuan){

                //save progres pengajuan

                $input_progres = [
                    'id_pengajuan' => $pengajuan->id,
                    'status' => 'peninjauan',
                    'keterangan' => '-'
                ];

                ProgresPengajuan::create($input_progres);

                return ResponseFormatter::success(['id_pengajuan' => $pengajuan->id], 'Successfully.');
            }else{
                return ResponseFormatter::error(null,'Gagal Dalam Penyimpanan',500);
            }

        }catch (\Throwable $e) {
            return ResponseFormatter::error($e->getMessage(), 'Something Went Wrong',500);
        }

    }

    public function riwayatPengajuan($id_user)
    {
        $riwayat_pengajuan = Pengajuan::where('id_user',$id_user)->with(['user','JenisPengajuan.kategori'])->orderBy('id','desc')->paginate(10);

        if(!empty($riwayat_pengajuan)) {
            return ResponseFormatter::success($riwayat_pengajuan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }
    }

    public function progresPengajuan($id_pengajuan)
    {
        $progres_pengajuan = ProgresPengajuan::where('id_pengajuan',$id_pengajuan)->with('pengajuan.JenisPengajuan')->orderBy('id','asc')->get();

        if(!empty($progres_pengajuan)) {
            return ResponseFormatter::success($progres_pengajuan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }


    }

}
