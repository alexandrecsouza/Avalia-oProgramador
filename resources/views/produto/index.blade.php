
@extends('layouts.main')

@section('titulo','Produto')

@section('conteudo')


<h1>Produto</h1>



<div>
    <form action="/pesquisa_produto" method="GET" placeholder="digite nome ou id">

    <input type="text"name="pesquisa" placeholder="digite nome ou id">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/criar_produto"><button>novo Produto</button></a>

</div>




<table>

    <thead>
        <th  scope="col"> ID</th>        
        <th  scope="col"> Nome</th>
        <th  scope="col"> Cor</th>
        <th  scope="col"> Valor</th>
        
        
        <th  scope="col"></th>
        <th  scope="col"></th>
    </thead>

    <tbody>
    @foreach ($produtos as $produto)
        <tr>
            <th scope="row">{{$produto->id}}</th>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->cor}}</td>
            <td>{{$produto->valor}}</td>
            
            


            <td>
                <form action="/editar_produto/{{$produto->id}}" method="GET">
                <input type="submit" value="editar">
                </form>
            </td>

            <td>
                <form action="/deletar_produto/{{$produto->id}}" method="POST">
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
