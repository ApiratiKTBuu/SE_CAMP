<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/insert-user',function(){
    return view('insert_user');
});
Route::post('/insert-user',[UserController::class, 'insertUser']);

Route::get('/insert-major', function(){
    return view('insert_major');
});

Route::post('/insert-major',[MajorController::class, 'insertMajor']);

Route::get('/user-list',[UserController::class, 'showUserList']);
Route::get('/delete-user/{user_id}',[UserController::class, 'deleteUser']);
Route::get('/edit-user/{user_id}',[UserController::class, 'editUser']);
Route::post('/edit-user',[UserController::class, 'updateUser']);
