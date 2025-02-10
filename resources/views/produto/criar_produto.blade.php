

@extends('layouts.main')

@section('titulo','Produto')

@section('conteudo')

<h1>Nova Produto</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_produto" method="post">
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
    Cor: 
    </td>
    <td>
    <input id="cor" type="text"name="cor" value="cor">
    </td>
</tr>
<tr>
    <td>
    Valor: 
    </td>
    <td>
        
    <input id="valor"  placeholder="1.0" step="0.01" name="valor" value="0.0">

    </td>
</tr>


</table>





<input type="submit" value="salvar" onclick="return validacao_produto()">

</form>

</div>




@endsection

