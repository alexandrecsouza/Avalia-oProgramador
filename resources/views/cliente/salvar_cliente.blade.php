


@extends('layouts.main')



@section('conteudo')



@if ($resultado=="salvo")
<h1>Salvo</h1>

<a href="/cliente">voltar</a>


@else
<h1>falha ao salvar</h1>

<a href="/cliente">voltar</a>


@endif


@endsection
