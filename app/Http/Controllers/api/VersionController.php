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

        $value = \Config::get('app.url_admin');
        
        return response()->json([
            'URL_LINK' => $value
        ]);
        

    }
}
