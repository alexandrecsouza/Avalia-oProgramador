

@extends('layouts.main')

@section('titulo','Lojas')

@section('conteudo')

<h1>Editar Cliente</h1>



<div>

<form action="/atualizar_loja/{{$loja[0]->id}}" method="post">
@csrf
@method('PUT')


<table>

<tr>
    <td>
    ID:
    </td>
    <td>
    <input id="id" type="text"name="id" value="{{$loja[0]->id}}">  
    </td>
</tr>
<tr>
    <td>
    Nome:
    </td>
    <td>
    <input id="nome" type="text"name="nome" value="{{$loja[0]->nome}}">  
    </td>
</tr>
<tr>
    <td>
    CNPJ: 
    </td>
    <td>
    <input id="cnpj" type="text"name="cnpj" value="{{$loja[0]->cnpj}}">
    </td>
</tr>
<tr>
    <td>
    CEP: 
    </td>
    <td>
        
    <input id="cep" type="text"name="cep" value="{{$loja[0]->cep}}">

    </td>
</tr>
<tr>
    <td>
    Endereço: 
    </td>
    <td>
    <input id="endereco" type="text"name="endereco" value="{{$loja[0]->endereco}}">
    </td>
</tr>

<tr>
    <td>
    Bairro:  
    </td>
    <td>
    <input id="bairro" type="text"name="bairro" value="{{$loja[0]->bairro}}">
    </td>
</tr>

<tr>
    <td>
    Cidade: 
    </td>
    <td>
    <input id="cidade" type="text"name="cidade" value="{{$loja[0]->cidade}}">
    </td>
</tr>

<tr>
    <td>
    UF: 
    </td>
    <td>
    <input id= "uf" type="text"name="uf" value="{{$loja[0]->uf}}">
    </td>
</tr>

</table>









<input type="submit" value="atualizar">

</form>

</div>


@endsection

