<?php

//namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ScrapingController;

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




Route::get('thread/', [ThreadController::class, 'index'])->name('threads.index');
Route::post('thread/search', [ThreadController::class, 'search'])->name('thread.search');

Route::get('scraping/', [ScrapingController::class, 'index']);
