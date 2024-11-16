<?php

use App\Http\Controllers\Admin\FilmController as AdminFilmController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/films',[AdminFilmController::class,'index'])->name('films.index');
    Route::post('/films',[AdminFilmController::class,'store'])->name('films.store');
    Route::get('/films/create',[AdminFilmController::class,'create'])->name('films.create');
    Route::delete('/films/{film}',[AdminFilmController::class,'destroy'])->name('films.delete');
    Route::put('/films/{film}',[AdminFilmController::class,'update'])->name('films.update');
    Route::get('/films/{film}',[AdminFilmController::class,'show'])->name('films.show');
    Route::get('/films/{film}/edit',[AdminFilmController::class,'edit'])->name('films.edit');

});
