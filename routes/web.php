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

//Route::get('/', function () {
//    $users = \App\Models\Computer::all();
//    return view('computer.computer', ['users' => $users]);
//});

Route::get('/checkfail', function () {
    echo "checkfail page";
    return view('home.admin');
});
Route::get('checkage/{age?}', function ($age) {
    $users=\App\Models\User::all();
//    $users = DB::table('users')->get();
    return view('user.userlist', ['users' => $users]);
})->middleware(\App\Http\Middleware\CheckAge::class);

Route::resource('users', UserController::class)->middleware(['auth', 'role:admin']);
Route::resource('view-detail', UserController::class)->middleware('auth');
Route::resource('details', ComputerController::class)->middleware('auth');
Route::resource('computers', ComputerController::class)->middleware(['auth', 'role:editor']);
Route::get('/delete-computer/{id}', [ComputerController::class, 'destroy'])->name('computer.delete')->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware(['auth', 'role:editor']);
Route::post('/add-new-cate', [CategoryController::class, 'addCate'])->name('categories.addCate')->middleware('auth');
Route::get('/addcate', [CategoryController::class, 'create'])->middleware('auth');
Route::get('/get-computer/{id}', [CategoryController::class, 'getProductFromCate'])->middleware('auth');
Route::get('/categories/{id}', [CategoryController::class], 'show')->middleware('auth');
Route::get('/delete-categories/{id}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth');
Route::resource('orders', OrderController::class)->middleware(['auth', 'role:editor']);
Route::resource('detail-order', OrderController::class)->middleware('auth');
Route::get('/get-order/{id}', [UserController::class, 'getOrder'])->middleware('auth');
Route::get('/get-user/{id}', [OrderController::class, 'getUser'])->middleware('auth');
Route::get('/delete-order/{id}', [OrderController::class, 'destroy'])->name('order.delete')->middleware('auth');
Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('user.delete')->middleware('auth');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
