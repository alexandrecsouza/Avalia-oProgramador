

@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')

<h1>Novo Cliente</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_cliente" method="post">
@csrf

<table>

<tr>
    <td>
    ID:
    </td>
    <td>
     <input id="id" type="text"name="id" value ="000">  
    </td>
</tr>
<tr>
    <td>
    Nome:
    </td>
    <td>
     <input id="nome" type="text"name="nome" value="nome">  
    </td>
</tr>
<tr>
    <td>
    cpf: 
    </td>
    <td>
    <input id="cpf" type="text"name="cpf" value="0">
    </td>
</tr>
<tr>
    <td>
    sexo: 
    </td>
    <td>
        
    <select  id="" name="sexo">        
        <option value="masulino">masulino</option>
        <option value="feminino">feminino</option>
    </select >

    </td>
</tr>
<tr>
    <td>
    Email:
    </td>
    <td>
    <input type="email"name="email" value="email@email.com">
    </td>
</tr>

</table>










<input type="submit" value="salvar" onclick="return validacao_cliente()">

</form>

</div>




@endsection

