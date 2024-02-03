<?php

use App\Http\Controllers\LexaInstitute\AboutController;
use App\Http\Controllers\LexaInstitute\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        'title' => 'MarcYovian',
    ]);
});

// Lexa Institute Routes
Route::get('/lexainstitute', [HomeController::class, 'index']);
Route::get('/lexainstitute/about', [AboutController::class, 'index']);
