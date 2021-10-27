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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test', function () {
    $viewData = [];
    // Check for flash errors
    if (session('error')) {
        $viewData['error'] = session('error');
        $viewData['errorDetail'] = session('errorDetail');
    }

    // Check for logged on user
    if (session('userName')) {
        $viewData['userName'] = session('userName');
        $viewData['userEmail'] = session('userEmail');
        $viewData['userTimeZone'] = session('userTimeZone');
    }

    return view('test', $viewData);
});
//Route::get('/signin', function () {
//    return '';
//});
