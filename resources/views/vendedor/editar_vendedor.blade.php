

@extends('layouts.main')

@section('titulo','Vendedor')

@section('conteudo')

<h1>Editar Vendedor</h1>



<div>

<form action="/atualizar_vendedor/{{$vendedor[0]->id}}" method="post">
@csrf
@method('PUT')



<table>

<tr>
    <td>
    ID:
    </td>
    <td>
    <input id="id" type="text"name="id" value="{{$vendedor[0]->id}}">   
    </td>
</tr>
<tr>
    <td>
    ID da Loja:
    </td>
    <td>
    <input id="id_loja" type="text"name="id_loja" value="{{$vendedor[0]->id_loja}}">
    </td>
</tr>
<tr>
    <td>
    Nome:
    </td>
    <td>
    <input id="nome" type="text"name="nome" value="{{$vendedor[0]->nome}}">
    </td>
</tr>


<tr>
    <td>
    CPF:
    </td>
    <td>
    <input id="cpf" type="text"name="cpf" value="{{$vendedor[0]->cpf}}">
    </td>
</tr>

</table>




<input type="submit" value="atualizar"onclick="return validacao_vendedor()">

</form>

</div>


@endsection

