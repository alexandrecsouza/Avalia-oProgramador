

@extends('layouts.main')

@section('titulo','Lojas')

@section('conteudo')

<h1>Nova Loja</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_loja" method="post">
@csrf

<table>

<tr>
    <td>
    ID:
    </td>
    <td>
     <input id="id" type="text"name="id" value="000">  
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
    CNPJ: 
    </td>
    <td>
    <input id="cnpj" type="text"name="cnpj" value="0">
    </td>
</tr>
<tr>
    <td>
    CEP: 
    </td>
    <td>
        
    <input id="cep" type="text"name="cep" value="0">

    </td>
</tr>
<tr>
    <td>
    Endereço: 
    </td>
    <td>
    <input id="endereco" type="text"name="endereco" value="endereço">
    </td>
</tr>

<tr>
    <td>
    Bairro:  
    </td>
    <td>
    <input id="bairro" type="text"name="bairro" value="bairro">
    </td>
</tr>

<tr>
    <td>
    Cidade: 
    </td>
    <td>
    <input id="cidade" type="text"name="cidade" value="cidade" >
    </td>
</tr>

<tr>
    <td>
    UF: 
    </td>
    <td>
    <input id= "uf" type="text"name="uf" value="uf">
    </td>
</tr>

</table>




  
   

       




<input type="submit" value="salvar" onclick="return true">

</form>

</div>




@endsection

