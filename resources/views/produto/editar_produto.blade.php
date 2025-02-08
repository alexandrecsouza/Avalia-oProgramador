

@extends('layouts.main')

@section('titulo','produto')

@section('conteudo')

<h1>Editar Produto</h1>



<div>

<form action="/atualizar_produto/{{$produto[0]->id}}" method="post">
@csrf
@method('PUT')

ID:         <input id="id" type="text"name="id" value="{{$produto[0]->id}}">  
Nome:       <input id="nome" type="text"name="nome" value="{{$produto[0]->nome}}">  
Cor:       <input id="cor" type="text"name="cor" value="{{$produto[0]->cor}}">
Valor:        <input id="valor" type="text"name="valor" value="{{$produto[0]->valor}}">




<input type="submit" value="atualizar">

</form>

</div>


@endsection

