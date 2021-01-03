<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CostumersController;

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

Route::view('about','about');//->middleware('test');

Route::get('contact-us',[ContactFormController::class,'create'])->name('contact.create');
Route::post('contact-us',[ContactFormController::class,'store'])->name('contact.store');
/*
Route::get('costumers',[CostumersController::class,'index']);
Route::get('costumers/create',[CostumersController::class, 'create']);
Route::post('costumers',[CostumersController::class,'store']);
Route::get('costumers/{costumer}',[CostumersController::class,'show']);
Route::get('costumers/{costumer}/edit',[CostumersController::class,'edit']);
Route::patch('costumers/{costumer}',[CostumersController::class,'update']);
Route::delete('costumers/{costumer}',[CostumersController::class,'destroy']);
*/
Route::resource('costumers', CostumersController::class);//->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);//->name('home');

