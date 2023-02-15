<?php

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
    return view('index');
});

Route::get('/about_us', function (){
    
    $data = [
        'name' => 'Nicolas',
        'surname' => 'Dominici',
        'age' => 22
    ];

    $level = 10;

    
   // return view('about_us', $data, $level);
   return view('about_us', compact('data', 'level'));
});

Route::get('/contact', function () {
    return view('contact');
});
