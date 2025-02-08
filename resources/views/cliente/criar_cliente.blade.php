

@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')

<h1>Novo Cliente</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_cliente" method="post">
@csrf

ID: <input id="id" type="text"name="id">  
Nome: <input id="nome" type="text"name="nome">  
cpf: <input id="cpf" type="text"name="cpf">
sexo: <input type="text"name="sexo">
Email: <input type="email"name="email">




<input type="submit" value="salvar" onclick="return validacao_cliente()">

</form>

</div>




@endsection

