
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Biblioteca\BibliotecaController;





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







Route::prefix('biblioteca')->name('biblioteca.')->group(function(){
  
  Route::middleware(['guest:biblioteca','PreventBackHistory'])->group(function(){
      Route::view('/login','biblioteca.login')->name('login');
     Route::view('/register','biblioteca.register')->name('register');
      Route::post('/create',[BibliotecaController::class,'create'])->name('create');
      Route::post('/check',[BibliotecaController::class,'check'])->name('check');
  });

  Route::middleware(['auth:biblioteca','PreventBackHistory'])->group(function(){
      Route::view('/home','biblioteca.home')->name('home');
      Route::get('/cadastrar_livro',[BibliotecaController::class,'cadastrar_livro'])->name('cadastrar_livro');
      Route::post('/cadastro',[BibliotecaController::class,'cadastro'])->name('cadastro');
      Route::post('/logout',[BibliotecaController::class,'logout'])->name('logout');
  });

});

