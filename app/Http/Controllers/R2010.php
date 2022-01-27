<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessR2010;


class R2010 extends Controller
{
    function getXML() {
        ProcessR2010::dispatch();        
    }  
}
