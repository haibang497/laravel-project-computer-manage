<?php

use App\Http\Controllers\ComputerController;
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
Route::get('/delete-computer/{id}', [ComputerController::class, 'destroy'])->name('computer.delete');
Route::resource('categories', CategoryController::class);
Route::post('/add-new-cate', [CategoryController::class, 'addCate'])->name('categories.addCate');
Route::get('/addcate', [CategoryController::class, 'create']);
Route::get('/get-computer/{id}', [CategoryController::class, 'getProductFromCate']);
Route::get('/categories/{id}', [CategoryController::class], 'show');
