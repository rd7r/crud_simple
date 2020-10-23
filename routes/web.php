<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

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

Route::get('contacto', [ContactoController::class, 'index']);

/*
//llamamos directo a la vista directo sin controlador
Route::get('/contacto',function(){
    return view('contacto');
});
//los parametros opcionales
Route::get('/name/{nombre}/lastname/{apellido?}', function($nombre,$apellido =  null){
    return 'bienvenido '.$nombre.' '.$apellido;
});
*/
