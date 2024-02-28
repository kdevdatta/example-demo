<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DemoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/{id}', function ($id) {
    return view('display/test', ['id' => $id] );
});

Route::get("m1", [UserController::class, "method_1"]);
Route::get("m2/{id}", [UserController::class, "method_2"]);

Route::get("/demo/test", [DemoController::class, "test"]);
