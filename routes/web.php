<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SiteController::class, 'home'])->name('home');
Route::get('/rooms',[SiteController::class, 'rooms'])->name('rooms');
Route::get('/about',[SiteController::class, 'about'])->name('about');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/events',[SiteController::class, 'events'])->name('events');
Route::get('/comming-soon',[SiteController::class, 'comingSoon'])->name('comingSoon');

Route::fallback(function(){
    return view('website.error');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
