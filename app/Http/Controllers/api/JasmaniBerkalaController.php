<?php

namespace App\Http\Controllers\api;

use App\Models\JasmaniBerkala;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class JasmaniBerkalaController extends Controller
{     
  
    public function index($id_user)
    {
        $jasmani_berkala = JasmaniBerkala::where('id_user',$id_user)->orderBy('id','desc')->first();

        if(!empty($jasmani_berkala)) {
            return ResponseFormatter::success($jasmani_berkala, 'Successfully.');
        }else{
            return ResponseFormatter::error(null, 'Data Not Found', 400);
        }   

    }
}
