<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/database', [App\Http\Controllers\DatabaseController::class, 'db'])->name('database');
Route::get('/ticket', [App\Http\Controllers\TicketController::class, 'ticket'])->name('ticket');
Route::get('/camera', [App\Http\Controllers\CameraController::class, 'cam'])->name('camera');
Route::get('/analytic', [App\Http\Controllers\AnalyticController::class, 'stat'])->name('analytic');
Route::get('/setting', [App\Http\Controllers\SettingController::class, 'setting'])->name('setting');

Route::resource('plates', PlateController::class);




Auth::routes();
