<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VartotojaController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    $data = [
        'APP_NAME' => env('APP_NAME', 'Laravel Demo'),
        'VERSION' => \App::VERSION(),
        'AUTHOR' => 'IST23',
        'YEAR' => date('Y')
    ];

    return view('info', compact('data'));
});

Route::get('/zmones', [VartotojaController::class, 'index']);
Route::resource('students', StudentController::class);