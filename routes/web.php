<?php

use App\Http\Controllers\ShowStatsAction;
use App\Http\Controllers\ShowUserAction;
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

Route::get('users/{user}', ShowUserAction::class)->name('user.show');
Route::get('stats', ShowStatsAction::class)->name('stats.index');
