<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    $users=DB::table('computers')->get();
    return view('user.userlist', ['users'=>$users]);
});

Route::get('/checkfail', function (){
    echo "checkfail page";
    return view('home.admin');
});
Route::get('checkage/{age?}', function ($age) {
    $users=DB::table('users')->get();
    return view('user.userlist', ['users'=>$users]);
})->middleware(\App\Http\Middleware\CheckAge::class);

Route::resource('users', UserController::class);
Route::resource('profile', ProfileController::class);
