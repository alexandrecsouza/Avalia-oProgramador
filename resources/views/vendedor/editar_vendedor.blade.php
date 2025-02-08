

@extends('layouts.main')

@section('titulo','Vendedor')

@section('conteudo')

<h1>Editar Vendedor</h1>



<div>

<form action="/atualizar_vendedor/{{$vendedor[0]->id}}" method="post">
@csrf
@method('PUT')


ID:         <input id="id" type="text"name="id" value="{{$vendedor[0]->id}}">  
ID_Loja:       <input id="id_loja" type="text"name="id_loja" value="{{$vendedor[0]->id_loja}}">  
Nome:       <input id="nome" type="text"name="nome" value="{{$vendedor[0]->nome}}">
CPF:        <input id="cpf" type="text"name="cpf" value="{{$vendedor[0]->cpf}}">





<input type="submit" value="atualizar">

</form>

</div>


@endsection

