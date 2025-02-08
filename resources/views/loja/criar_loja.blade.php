

@extends('layouts.main')

@section('titulo','Lojas')

@section('conteudo')

<h1>Nova Loja</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_loja" method="post">
@csrf

ID:         <input id="id" type="text"name="id">  
Nome:       <input id="nome" type="text"name="nome">  
CNPJ:       <input id="cnpj" type="text"name="cnpj">
CEP:        <input id="cep" type="text"name="cep">
Endereço:   <input id="endereco" type="text"name="endereco">
Bairro:     <input id="bairro" type="text"name="bairro">
Cidade:     <input id="cidade" type="text"name="cidade">
UF:          <input id= "uf" type="text"name="uf">




<input type="submit" value="salvar" onclick="return true">

</form>

</div>




@endsection

