


@extends('layouts.main')

@section('titulo','Vendedor')

@section('conteudo')

<h1>Vendedor salvo</h1>

<a href="/vendedor">voltar</a>


<div>
<p>ID:{{$vendedor->id}} </p>


</div>

@endsection
