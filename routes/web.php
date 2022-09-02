<?php

use App\Http\Livewire\ShowTweets;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UploadPhoto;
use App\Models\Products;

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

Route::get('upload', UploadPhoto::class)->name('upload.photo.user')->middleware('auth');

Route::get('tweets', ShowTweets::class)->name('tweets.index')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/product', function () {
        return view('product');
    })->name('product');
});
