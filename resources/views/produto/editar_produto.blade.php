

@extends('layouts.main')

@section('titulo','produto')

@section('conteudo')

<h1>Editar Produto</h1>



<div>

<form action="/atualizar_produto/{{$produto[0]->id}}" method="post">
@csrf
@method('PUT')




<table>

<tr>
    <td>
    ID:
    </td>
    <td>
    <input id="id" type="text"name="id" value="{{$produto[0]->id}}">
    </td>
</tr>
<tr>
    <td>
    Nome:
    </td>
    <td>
    <input id="nome" type="text"name="nome" value="{{$produto[0]->nome}}">  
    </td>
</tr>
<tr>
    <td>
    Cor: 
    </td>
    <td>
    <input id="cor" type="text"name="cor" value="{{$produto[0]->cor}}">
    </td>
</tr>
<tr>
    <td>
    Valor: 
    </td>
    <td>
    
    
    <input id="valor"  placeholder="1.0" step="0.01" name="valor" value="{{$produto[0]->valor}}">

    </td>
</tr>


<input type="submit" value="atualizar" onclick="return validacao_produto()">
</form>

</div>


@endsection

