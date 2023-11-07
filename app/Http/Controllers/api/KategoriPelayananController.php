<?php

namespace App\Http\Controllers\api;

use App\Models\KategoriPelayanan;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class KategoriPelayananController extends Controller
{     
  
    public function index()
    {
        $kategori_pelayanan = KategoriPelayanan::all();

        if(!empty($kategori_pelayanan)) {
            return ResponseFormatter::success($kategori_pelayanan, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
