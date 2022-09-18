<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnumController;
use App\Enums\UserStatus;
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
    return view('welcome');
});

Route::get('/enum', EnumController::class);

Route::get('/users/{status}', function (UserStatus $status) {
    return $status->showStatus();
});

Route::get('/users/{status}/nameValue', function (UserStatus $status) {
    return dd($status->name, $status->value);
});
