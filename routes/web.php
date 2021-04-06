<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

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

//MiddleWare

Route::get('/', function () {
    return view('welcome');
});

// usage inside a laravel route

Route::get('/', function()
{
    $img = Image::make('foo.jpg')->resize(300, 200);

    return $img->response('jpg');
});
