<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use  App\Http\Controllers\C_titles;
use  App\Http\Controllers\MyAuth;
use App\Http\Controllers\OnlineExhibitionAuth;

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
Route::get('/mul-table',function(){
    return view('Jquery');
});
Route::get('/login', [OnlineExhibitionAuth::class, 'login_view'])->name('login');
Route::post('/login',[OnlineExhibitionAuth::class, 'login_process']);
Route::get('/logout',[OnlineExhibitionAuth::class, 'logout_process']);
//Route::get('/login',[MyAuth::class, 'login_view'])->name('login');
//Route::get('/register',[MyAuth::class, 'register_view']);
//Route::get('/logout',[MyAuth::class, 'logout_process']);
//Route::post('/login',[MyAuth::class, 'login_process']);
//Route::post('/register',[MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');

Route::middleware('auth')->group(function(){
        //auth first
});


Route::get('/my-controller',[myController::class, 'index']);

Route::get('/my-controller2','App\Http\Controllers\myController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3','myController@index');
    Route::post('/my-controller3-post', 'myController@store');
});

Route::resource('my-controller4', myController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function(){
    //return view('myroute');
    $data= ['val_a'=>'Hello world!'];
    $data['val_b'] = "Larravel";
    return view('myfolder.myAdminpage',$data);
});

Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});

Route::get('/my-multiply-table', function(){
    //return view('myroute');
    return view('myfolder.mypage');
});

Route::post('/my-multiply-table',function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myfolder.MymultiplyTable', $data);
});
