<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;


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

// route Home
Route::get('home', [HomeController::class, 'index'])->name('home');

// route profil
Route::get('profile', ProfileController::class)->name('profile');

// route employee
Route::resource('employees', EmployeeController::class);


Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');
