<?php

use App\Models\data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/', [DataController::class, 'index']);

Route::get('/search/create', [DataController::class, 'create']);

//store search DATA
Route::post('/search', [DataController::class, 'store']);

Route::get('/search/{data}', [DataController::class, 'show']);

