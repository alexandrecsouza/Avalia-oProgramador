<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;





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
Route::delete('/deletar_cliente/{id}',[ClienteController::class,'destroy']);



Route::get('/loja',[LojaController::class,'index']);
Route::get('/criar_loja',[LojaController::class,'create']);
Route::post('/salvar_loja',[LojaController::class,'store']);
Route::get('/pesquisa_loja',[LojaController::class,'search']);
Route::get('/editar_loja/{id}',[LojaController::class,'edit']);
Route::put('/atualizar_loja/{id}',[LojaController::class,'update']);
Route::delete('/deletar_loja/{id}',[LojaController::class,'destroy']);



