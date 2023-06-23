<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Super\SuperController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Ondjiva\Estudante\OndjivaEController;





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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[ConfigController::class,'index'])->name('welcome');
Route::get('/viewondjiva',[ConfigController::class,'viewondjiva'])->name('viewondjiva');
Route::get('/caxito',[ConfigController::class,'caxito']);
Route::get('/malanje',[ConfigController::class,'malanje']);
Route::get('/ndalatando',[ConfigController::class,'ndalatando']);

Route::prefix('super')->name('super.')->group(function(){


    Route::middleware(['guest:super','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.super.login')->name('login');
        Route::view('/register','dashboard.super.register')->name('register');
        Route::post('/create',[SuperController::class,'create'])->name('create');
        Route::post('/check',[SuperController::class,'check'])->name('check');
    });


    Route::middleware(['auth:super','PreventBackHistory'])->group(function(){
      
        Route::get('/home',[SuperController::class,'home'])->name('home');
        Route::post('/logout',[SuperController::class,'logout'])->name('logout');
       // Route::view('/home','dashboard.super.home')->name('home');
      //  Route::view('/home','dashboard.super.home')->name('home');
        Route::post('/disciplina',[SuperController::class,'disciplina'])->name('disciplina');
        Route::post('/add_prof',[SuperController::class,'add_prof'])->name('add_prof');
        Route::post('/turma',[SuperController::class,'turma'])->name('turma');
        Route::post('/classe',[SuperController::class,'classe'])->name('classe');
        Route::post('/liceu',[SuperController::class,'liceu'])->name('liceu');
        Route::post('/tp_edoc',[SuperController::class,'tp_edoc'])->name('tp_edoc');
        Route::post('/tp_pdoc',[SuperController::class,'tp_pdoc'])->name('tp_pdoc');
        Route::post('/dia',[SuperController::class,'dia'])->name('dia');
        Route::post('/trimestre',[SuperController::class,'trimestre'])->name('trimestre');
        Route::post('/tipo_not',[SuperController::class,'tipo_not'])->name('tipo_not');
        Route::post('/tipo_pessoa',[SuperController::class,'tipo_pessoa'])->name('tipo_pessoa');
        Route::post('/liceu',[SuperController::class,'liceu'])->name('liceu');
        Route::post('/typeprova',[SuperController::class,'typeprova'])->name('typeprova');
        Route::post('/typefalta',[SuperController::class,'typefalta'])->name('typefalta');
        Route::post('/typeplano',[SuperController::class,'typeplano'])->name('typeplano');
        Route::post('/formacao',[SuperController::class,'formacao'])->name('formacao');
        Route::post('/link',[SuperController::class,'link'])->name('link');

        
    });

});

