<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
    $users = \App\Models\Computer::all();
    return view('computer.computer', ['users' => $users]);
});

Route::get('/checkfail', function () {
    echo "checkfail page";
    return view('home.admin');
});
Route::get('checkage/{age?}', function ($age) {
    $users=\App\Models\User::all();
//    $users = DB::table('users')->get();
    return view('user.userlist', ['users' => $users]);
})->middleware(\App\Http\Middleware\CheckAge::class);

Route::resource('users', UserController::class);
Route::resource('view-detail', UserController::class);
Route::resource('details', ComputerController::class);
Route::resource('computers', ComputerController::class);
Route::get('/addcate', [CategoryController::class, 'create']);
Route::get('/get-computer/{id}', [CategoryController::class, 'getProductFromCate']);
Route::get('/categories/{id}', [CategoryController::class], 'show');
Route::get('/delete-categories/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
Route::resource('orders', OrderController::class);
Route::resource('detail-order', OrderController::class);
Route::get('/get-order/{id}', [UserController::class, 'getOrder']);
Route::get('/get-user/{id}', [OrderController::class, 'getUser']);
