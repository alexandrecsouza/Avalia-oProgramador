

@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')

<h1>Editar Cliente</h1>



<div>

<form action="/atualizar_cliente/{{$cliente[0]->id}}" method="post">
@csrf
@method('PUT')
<table>

<tr>
    <td>
    ID:
    </td>
    <td>
     <input id="id" type="text"name="id" value="{{$cliente[0]->id}}">  
    </td>
</tr>
<tr>
    <td>
    Nome:
    </td>
    <td>
     <input id="nome" type="text"name="nome" value="{{$cliente[0]->nome}}">  
    </td>
</tr>
<tr>
    <td>
    cpf: 
    </td>
    <td>
    <input id="cpf" type="text"name="cpf"  value="{{$cliente[0]->cpf}}">
    </td>
</tr>
<tr>
    <td>
    sexo: 
    </td>
    <td>
        
    <select  id="" name="sexo" value="{{$cliente[0]->sexo}}">        
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
    <input type="email"name="email" value="{{$cliente[0]->email}}">
    </td>
</tr>

</table>




<input type="submit" value="atualizar">

</form>

</div>


@endsection

