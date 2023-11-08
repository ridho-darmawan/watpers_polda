<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class VersionController extends Controller
{     
  
    public function index()
    {

        $app_url_admin = env('APP_NAME');
        $app_versi = env('APP_VERSI');
        
        return response()->json([
            'URL_LINK' => $app_url_admin
        ]);
        

    }
}
