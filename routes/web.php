<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjahitController;
use App\Http\Controllers\PackageController;
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
Route::get('/dashboard', function (){
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware(['auth:sanctum','verified']);
Route::get('/dasboard',[HomeController::class,'dasboard'])->name('dashboard')->middleware(['auth:sanctum','verified']);
Route::resource('berita',BeritaController::class);
Route::group(['middleware'=>'auth:sanctum'], function () {
Route::resource('petani', PenjahitController::class);
});
