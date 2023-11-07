<?php

namespace App\Http\Controllers\api;

use App\Models\JenisPengajuan;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class JenisPengajuanController extends Controller
{     
  
    public function index()
    {
        $jenis_pengajuan = JenisPengajuan::with('kategori')->get();

        if(!empty($jenis_pengajuan)) {
            return ResponseFormatter::success($jenis_pengajuan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
