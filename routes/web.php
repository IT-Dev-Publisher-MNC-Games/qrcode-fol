<?php

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'not found';
});

Route::get('/fightoflegends', function () {
    $agent = new Agent();
    $platform = $agent->platform();

 
    if ($platform == "AndroidOS") {
        return redirect('https://play.google.com/store/games?hl=id&gl=US');
    } elseif ($platform == "OS X") {
        return redirect('https://www.apple.com/id/app-store');
    } else {
        return redirect('https://fightoflegends.co.id');
    }
});
