<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('cliente');
});




Route::get('/cliente',[ClienteController::class,'index']);
Route::get('/criar_cliente',[ClienteController::class,'create']);
Route::post('/salvar_cliente',[ClienteController::class,'store']);
Route::get('/pesquisa_cliente',[ClienteController::class,'search']);
Route::get('/editar_cliente/{id}',[ClienteController::class,'edit']);
Route::put('/atualizar_cliente/{id}',[ClienteController::class,'update']);

