<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Spatie\Browsershot\Browsershot;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-pdf', function () {
    $view =   View::make('pdf')->render();
    Browsershot::html($view)
        ->setIncludePath('$PATH:/usr/local/bin')
        ->setRemoteInstance('172.22.0.100', '9222')
        ->setCustomTempPath('/var/www/html/public/pdf/tmp')
        ->waitUntilNetworkIdle()
        ->format('A4')
        ->showBackground()
        ->savePdf("pdf/" . now()->format('y-m-d_H-i-s') . '.pdf');
});
