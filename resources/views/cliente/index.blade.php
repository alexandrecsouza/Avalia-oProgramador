
@extends('layouts.main')

@section('titulo','Clientes')

@section('conteudo')
<h1>Clientes</h1>



<div>
    <form action="/pesquisa_cliente" method="GET">

    <input type="text"name="pesquisa">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/criar_cliente"><button>novo cliente</button></a>

</div>



<div>
@foreach ($clientes as $cliente)

    <div>
    <p>name {{$cliente->nome}}</p>



        <form action="/editar_cliente/{{$cliente->id}}" method="GET">
        <input type="submit" value="editar">
        </form>


        <form action="/deletar_cliente/{{$cliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="excluir">
        </form>


    </div>

@endforeach

</div>


@endsection
