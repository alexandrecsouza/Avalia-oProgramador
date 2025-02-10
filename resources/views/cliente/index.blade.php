
@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')
<h1>Clientes</h1>



<div>
    <form action="/pesquisa_cliente" method="GET">

    <input type="text"name="pesquisa" placeholder="digite nome ou id">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/criar_cliente"><button>novo cliente</button></a>

</div>



<div>

<table>

    <thead>
        <th  scope="col"> ID</th>
        <th  scope="col"> Nome</th>
        <th  scope="col"> CPF </th>
        <th  scope="col"> Sexo </th>
        <th  scope="col"> Email</th>
        <th  scope="col"></th>
        <th  scope="col"></th>
    </thead>

    <tbody>
    @foreach ($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->sexo}}</td>
            <td>{{$cliente->email}}</td>


            <td>
                <form action="/editar_cliente/{{$cliente->id}}" method="GET">
                <input type="submit" value="editar">
                </form>
            </td>

            <td>
                <form action="/deletar_cliente/{{$cliente->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="excluir">
                </form>
            </td>


        </tr>
    @endforeach
    </tbody>


</table>


</div>


@endsection
