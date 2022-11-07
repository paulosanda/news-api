<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;

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

Route::get('/', [NewsApiController::class, 'get_tech_news'])->name('tech.news.get');
