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
    return view('home');
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



Route::get('/vendedor',[VendedorController::class,'index']);
Route::get('/criar_vendedor',[VendedorController::class,'create']);
Route::post('/salvar_vendedor',[VendedorController::class,'store']);
Route::get('/pesquisa_vendedor',[VendedorController::class,'search']);
Route::get('/editar_vendedor/{id}',[VendedorController::class,'edit']);
Route::put('/atualizar_vendedor/{id}',[VendedorController::class,'update']);
Route::delete('/deletar_vendedor/{id}',[VendedorController::class,'destroy']);


Route::get('/produto',[ProdutoController::class,'index']);
Route::get('/criar_produto',[ProdutoController::class,'create']);
Route::post('/salvar_produto',[ProdutoController::class,'store']);
Route::get('/pesquisa_produto',[ProdutoController::class,'search']);
Route::get('/editar_produto/{id}',[ProdutoController::class,'edit']);
Route::put('/atualizar_produto/{id}',[ProdutoController::class,'update']);
Route::delete('/deletar_produto/{id}',[ProdutoController::class,'destroy']);



Route::get('/venda',[VendaController::class,'index']);
Route::get('/criar_venda',[VendaController::class,'create']);
Route::post('/salvar_venda',[VendaController::class,'store']);
Route::get('/pesquisa_venda',[VendaController::class,'search']);
Route::get('/editar_venda/{id}',[VendaController::class,'edit']);
Route::put('/atualizar_venda/{id}',[VendaController::class,'update']);
Route::delete('/deletar_venda/{id}',[VendaController::class,'destroy']);