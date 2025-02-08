


@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')

<h1>Cliente salvo</h1>

<a href="/loja">voltar</a>


<div>
<p>ID:{{$loja->id}} </p>
<p>Nome:{{$loja->nome}} </p>


</div>

@endsection
