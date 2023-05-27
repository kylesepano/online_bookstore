<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
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

Route::middleware('auth')->group(function () {
});

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/on_sale', function () {
    return view('pages.sale');
})->name('sale');
Route::get('/preorder', function () {
    return view('pages.preorder');
})->name('preorder');
Route::get('/new_arrivals', function () {
    return view('pages.new');
})->name('new');

Route::get('/filter/{type}', [PagesController::class, 'type'])->name('type');
Route::get('/filter/{type}/{criteria}', [PagesController::class, 'criteria'])->name('criteria');
Route::get('/filter/{type}/{criteria}/{category}', [PagesController::class, 'category'])->name('category');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/log', [AuthController::class, 'log'])->name('log');
Route::post('/reg', [AuthController::class, 'reg'])->name('reg');
