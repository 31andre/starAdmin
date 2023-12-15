<?php

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

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

        Route::middleware(['auth'])->group(function() {

                Route::controller(UserController::class)->group(function() {
                

                        Route::get('/register', [UserController::class, 'Register'])->name('register');
                        Route::post('/postregister', [UserController::class, 'handleRegister'])->name('postregister');
                
                });

                Route::get('/logout', function() {Auth()->logout();session()->flush();return redirect('/');})->name('deconnexion');

        });

        Route::middleware(['guest'])->group( function(){

                Route::get('/', [loginController::class, 'Login'])->name('/');
                Route::post('/login', [loginController::class, 'handleLogin'])->name('login');

        });


        

        Route::controller(PageController::class)->group( function() {

                Route::get('/datatable', [PageController::class, 'datatable']);
                Route::get('/basic-table', [PageController::class, 'basictable']);


                Route::get('/home', [PageController::class, 'dashboard'])->name('accueil');
        });

        Route::controller(ArticleController::class)->group(function() {

                Route::get('/ajouter-articles', [ArticleController::class, 'AjoutArticle'])->name('ajouter');

                Route::get('/list-articles', [ArticleController::class, 'ListArticle'])->name('list');

                Route::get('/update-article={id}', [ArticleController::class, 'Update'])->name('update');
                Route::put('/update-article/{article}', [ArticleController::class, 'UpdateArticle'])->name('PutUpdate');

                Route::get('/show-article={id}', [ArticleController::class, 'Show'])->name('show');

                Route::post('/post-articles', [ArticleController::class, 'PostArticle'])->name('PostArticle');

                Route::post('/Update-articles', [ArticleController::class, 'UpdateArticle'])->name('Updatearticle');

                Route::get('/delete/{article}', function (Article $article) { $article->delete();return redirect()->back()->with('succcess', 'SUCCESS');})->name('delete');;
                
        });
