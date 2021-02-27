<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::get('/auth', function () {
    return view('auth');
});


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

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
})->middleware('auth');


Route::get('/intro2', function () {
    return view('intro2');
});

Route::get('/quiz2', function () {
    return view('quiz2');
})->middleware('auth');

Route::get('/main1', function () {
    return view('main1');
})->middleware('auth');


Route::get('/quiztest', function () {
    return view('quiztest');
})->middleware('auth');

//////////////// Modules ////////////////

Route::get('/module', function () {
    return view('module');
})->middleware('auth');

Route::get('/module1', function () {
    return view('module1');
})->middleware('auth');

Route::get('/module2', function () {
    return view('module2');
})->middleware('auth');

Route::get('/module3', function () {
    return view('module3');
})->middleware('auth');

Route::get('/module4', function () {
    return view('module4');
})->middleware('auth');

Route::get('/module5', function () {
    return view('module5');
})->middleware('auth');

Route::get('/module6', function () {
    return view('module6');
})->middleware('auth');

//////////////////////////////////////////

Route::get('/plan', function () {
    return view('plan');
})->middleware('auth');

Route::get('/library', function () {
    return view('library');
})->middleware('auth');

Route::get('/exam', function () {
    return view('exam');
})->middleware('auth');

//////////////// Results ////////////////

Route::get('/score', function () {
    return view('score');
})->middleware('auth');

Route::get('/score2', function () {
    return view('score2');
})->middleware('auth');

Route::get('/score3', function () {
    return view('score3');
})->middleware('auth');


Route::get('/score4', function () {
    return view('score4');
})->middleware('auth');

Route::get('/alm8yas2', function () {
    return view('alm8yas2');
})->middleware('auth');

Route::get('/alm8yas2Score', function () {
    return view('alm8yas2Score');
})->middleware('auth');

////////////////////////////////////////////////
Route::get('/contact', function () {
    return view('contact');
})->middleware('auth');


Route::get('/support', function () {
    return view('support');
});


// return \File::get(public_path() . '/score.php');



Route::get('/file', function () {
    return view('file');
});
Route::get('/upload', function () {
    return view('upload');
});


//////////////////////
// uplaod files //



Route::get('file-upload', [App\Http\Controllers\FileUploadController::class, 'fileUpload'])->name('file.upload');

Route::post('file-upload1', [App\Http\Controllers\FileUploadController::class, 'fileUploadPost1'])->name('file.upload.post1');
Route::post('file-upload2', [App\Http\Controllers\FileUploadController::class, 'fileUploadPost2'])->name('file.upload.post2');
Route::post('file-upload3', [App\Http\Controllers\FileUploadController::class, 'fileUploadPost3'])->name('file.upload.post3');