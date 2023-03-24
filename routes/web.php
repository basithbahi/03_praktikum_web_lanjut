<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurhatanController;
use App\Http\Controllers\JadwalPerkuliahanController;

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
    return view('app');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/satu', [ProductController::class, 'satu']);
    Route::get('/dua', [ProductController::class, 'dua']);
    Route::get('/tiga', [ProductController::class, 'tiga']);
    Route::get('/empat', [ProductController::class, 'empat']);
});

Route::get('/news/{id}', [NewsController::class, 'index']);

Route::prefix('program')->group(function(){
    Route::get('/satu', [ProgramController::class, 'satu']);
    Route::get('/dua', [ProgramController::class, 'dua']);
    Route::get('/tiga', [ProgramController::class, 'tiga']);
    Route::get('/empat', [ProgramController::class, 'empat']);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::resource('/contact-us', ContactUsController::class)->only(["index"]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/curhat', [CurhatanController::class, 'index'])->name('curhat');
Route::get('/jadwalPerkuliahan', [JadwalPerkuliahanController::class, 'index'])->name('jadwalPerkuliahan');