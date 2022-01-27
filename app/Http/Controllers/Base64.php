<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;

class Base64 extends Controller
{
    function decoder() {

        $str = '';

        file_put_contents('certificado.pfx', base64_decode($str));

    }  
}
