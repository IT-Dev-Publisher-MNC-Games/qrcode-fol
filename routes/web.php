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
    return view('welcome');
});


Route::get('/link', function (Request $request) {

    $agent = new Agent();
    $platform = $agent->platform();

    dd($platform);
    if ($platform == "Android") {
        return 'open in android';
    } elseif ($platform == "iphone") {
        return 'open in iphone';
    } else {
        return 'open in browser';
    }
})->name('click');
