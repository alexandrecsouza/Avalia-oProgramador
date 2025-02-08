

@extends('layouts.main')

@section('titulo','Produto')

@section('conteudo')

<h1>Nova Produto</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_produto" method="post">
@csrf

ID:         <input id="id" type="text"name="id">  
Nome:       <input id="nome" type="text"name="nome">  
Cor:       <input id="cor" type="text"name="cor">
Valor:        <input id="valor" type="text"name="valor">





<input type="submit" value="salvar" onclick="return true">

</form>

</div>




@endsection

