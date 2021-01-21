<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\RestoController;

//Route::get("/","RestoController@index");
Route::get('/', [RestoController::class, 'index']);
Route::get('/list', [RestoController::class,'list']);
//Route::get('/add', [RestoController::class,'add']);
Route::view('/add','add');
Route::post('/add',[RestoController::class,'add']);

//for delete route
Route::get('/delete/{id}',[RestoController::class,'delete']);

//for edit/update
Route::get('/edit/{id}',[RestoController::class,'edit']);
Route::post('/edit',[RestoController::class,'update']);

Route::get('/search', [RestoController::class,'search']);
Route::get('/login', [RestoController::class,'login']);
Route::get('/register', [RestoController::class,'register']);
// Route::get('/greeting', function () {
//     return 'Hello World';
// });
?>