


@extends('layouts.main')

@section('titulo','Vendedor')

@section('conteudo')

<h1>Produto salvo</h1>

<a href="/produto">voltar</a>


<div>
<p>ID:{{$produto->id}} </p>


</div>

@endsection
