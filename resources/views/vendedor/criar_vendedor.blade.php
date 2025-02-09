

@extends('layouts.main')

@section('titulo','Vendedor')

@section('conteudo')

<h1>Nova Loja</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_vendedor" method="post">
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
    ID da Loja:
    </td>
    <td>
    <input id="id_loja" type="text"name="id_loja" value ="000">  
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
    CPF:
    </td>
    <td>
    <input id="cpf" type="text"name="cpf" value="0">
    </td>
</tr>

</table>






<input type="submit" value="salvar" onclick="return true">

</form>

</div>




@endsection

