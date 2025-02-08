

@extends('layouts.main')

@section('titulo','Lojas')

@section('conteudo')

<h1>Editar Cliente</h1>



<div>

<form action="/atualizar_loja/{{$loja[0]->id}}" method="post">
@csrf
@method('PUT')


ID:         <input id="id" type="text"name="id" value="{{$loja[0]->id}}">  
Nome:       <input id="nome" type="text"name="nome" value="{{$loja[0]->nome}}">  
CNPJ:       <input id="cnpj" type="text"name="cnpj" value="{{$loja[0]->cnpj}}">
CEP:        <input id="cep" type="text"name="cep" value="{{$loja[0]->cep}}">
Endereço:   <input id="endereco" type="text"name="endereco" value="{{$loja[0]->endereco}}">
Bairro:     <input id="bairro" type="text"name="bairro" value="{{$loja[0]->bairro}}">
Cidade:     <input id="cidade" type="text"name="cidade" value="{{$loja[0]->cidade}}">
UF:          <input id= "uf" type="text"name="uf" value="{{$loja[0]->uf}}">




<input type="submit" value="atualizar">

</form>

</div>


@endsection

