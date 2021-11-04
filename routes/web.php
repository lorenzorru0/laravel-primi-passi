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

    $data = [
        'pages' => ['page1', 'page2', 'page3'] 
    ];

    return view('home', $data);
});

Route::get('/page1', function () {

    $data = [
        'pages' => ['home', 'page2', 'page3']
    ];

    return view('page1', $data);
});

Route::get('/page2', function () {

    $data = [
        'pages' => ['home', 'page1', 'page3']
    ];

    return view('page2', $data);
});

Route::get('/page3', function () {

    $data = [
        'pages' => ['home', 'page1', 'page2']
    ];

    return view('page3', $data);
});