<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController as Application;
use App\Http\Controllers\AudienceController as Audience;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Application::class, 'index'])->name('invitation');
Route::get('/home', [Application::class, 'home'])->name('home');
Route::post('/home/audience', [Audience::class, 'store'])->name('audience.store');

