<?php

use App\Http\Controllers\ShortLinkController;
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
Route::get('clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    return ("Success..! OK");
});

Route::get('/', function () {
    return view('index');
});

Route::post('generate-shorten-link', [ShortLinkController::class, 'store'])->name('store');
Route::get('{code}', [ShortLinkController::class, 'shortenLink'])->name('shorten.link');
