<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::get('/auth', function () {
    return view('auth');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/info', function () {
    return view('info');
});


Route::get('/intro1', function () {
    return view('intro1');
});

Route::get('/quiz1', function () {
    return view('quiz1');
});


Route::get('/intro2', function () {
    return view('intro2');
});

Route::get('/quiz2', function () {
    return view('quiz2');
});

Route::get('/main1', function () {
    return view('main1');
});

Route::get('/module', function () {
    return view('module');
});

Route::get('/module1', function () {
    return view('module1');
});

Route::get('/plan', function () {
    return view('plan');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/exam', function () {
    return view('exam');
});


Route::get('/score', function () {
    return view('score');
});

// return \File::get(public_path() . '/score.php');
