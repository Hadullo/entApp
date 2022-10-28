<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//To Home Page
Route::get('/', [PagesController::class, 'getIndex'])->name('home.index');

//To About Page
Route::get('/about', [PagesController::class, 'getAbout'])->name('about');


//To About Contact Page
Route::get('/contact', [PagesController::class, 'getContact'])->name('contact');

//Route::get('/', function () {
   // return view('index');
//});



//Route::get('/about', function () {
  //  return view('about');
//});


//Route::get('/contact', function () {
   // return view('contact');
//});
