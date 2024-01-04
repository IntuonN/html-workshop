<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;


Route::get('/multi', function () {
    return view('myfolder.multi');
});

Route::post('/multi', function (Request $req) {
    $data['number'] = $req -> input('number');
    return view('myroute',$data);
});

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

Route::get('/my-controller', [MyController::class,'index']); //import path แล้วเรียก class import ครั้งเดียวเรียกได้หลาย class

Route::get('/my-controller2','App\Http\Controllers\MyController@index'); //เข้าถึง path โดยตรง แล้วเลือก class

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('my-controller3', 'MyController@index');
});

Route::resource('/my-controller4', MyController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/my-routes', function () {
//     echo "<h1> My Route Page</h1>";
// });

// Route::get('/my-routes', function () {
//     $data = ['val_a' => 'Hello World'];
//     $data['val_b'] = "Laraval";
//     return view('myfolder.mypage',$data);
// });

// Route::get('/my-routes', function () {
//     return view('myroute');
// });

// Route::post('/my-routes', function (Request $req) {
//     $data['myinput'] = $req -> input('myinput');
//     $data['myemail'] = $req -> input('myemail');
//     return view('myroute',$data);
// });
