

@extends('layouts.main')

@section('titulo','Vendedor')

@section('conteudo')

<h1>Nova Loja</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_vendedor" method="post">
@csrf

ID:         <input id="id" type="text"name="id">  
ID da Loja:       <input id="id_loja" type="text"name="id_loja">  
Nome:       <input id="nome" type="text"name="nome">
CPF:        <input id="cpf" type="text"name="cpf">





<input type="submit" value="salvar" onclick="return true">

</form>

</div>




@endsection

