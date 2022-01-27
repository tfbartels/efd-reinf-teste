<?php

use App\Http\Controllers\Base64;
use App\Http\Controllers\R1000;
use App\Http\Controllers\R2010;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('r1000', function (R1000 $ref) {
    $ref->getXML();
})->purpose('Generate XML of R1000 layout');

Artisan::command('r1000:envio', function (R1000 $ref) {
    $ref->enviaEvento();
})->purpose('Generate XML of R1000 layout');

Artisan::command('r2010', function (R2010 $ref) {
    $ref->getXML();
})->purpose('Generate XML of R2010 layout');

Artisan::command('base64:decoder', function (Base64 $ref) {
    $ref->decoder();
})->purpose('Decoder base64');

