<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\control1;

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

Route::get('/', [control1::class, 'index']);

Route::post('saveItem', [control1::class, 'saveItem'])->name('saveItem');

Route::post('complete/{id}', [control1::class, 'complete'])->name('complete');
