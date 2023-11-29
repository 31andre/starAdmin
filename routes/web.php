<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\View\View;
use App\Http\Controllers\UserController;

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



                /* --- Auth Controller ---*/
        Route::get('/', [UserController::class, 'Login']);
        Route::post('/login', [UserController::class, 'handleLogin'])->name('login'); 


        Route::get('/register', [UserController::class, 'Register'])->name('register');
        Route::post('/postregister', [UserController::class, 'handleRegister'])->name('postregister');

        Route::get('/logout', function() {Auth()->logout();session()->flush();return redirect('/');})->name('deconnexion');


Route::get('/datatable', [PageController::class, 'datatable']);
Route::get('/basic-table', [PageController::class, 'basictable']);


Route::get('/dashboard', [PageController::class, 'dashboard'])->name('accueil');
