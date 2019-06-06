<?php

use App\Http\Controllers\ShowClicksAction;
use App\Http\Controllers\UserClickedAction;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('users/{user}/clicked', UserClickedAction::class)->name('api.user.clicked');
Route::get('users/{user}/clicks', ShowClicksAction::class)->name('api.user.clicks');
