
@extends('layouts.main')

@section('titulo','Lojas')

@section('conteudo')


<h1>Lojas</h1>



<div>
    <form action="/pesquisa_loja" method="GET">

    <input type="text"name="pesquisa">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/criar_loja"><button>nova Loja</button></a>

</div>




<table>

    <thead>
        <th  scope="col"> ID</th>
        <th  scope="col"> Nome</th>
        
        <th  scope="col"></th>
        <th  scope="col"></th>
    </thead>

    <tbody>
    @foreach ($lojas as $lojas)
        <tr>
            <th scope="row">{{$lojas->id}}</th>
            <td>{{$lojas->nome}}</td>
            


            <td>
                <form action="/editar_lojas/{{$lojas->id}}" method="GET">
                <input type="submit" value="editar">
                </form>
            </td>

            <td>
                <form action="/deletar_lojas/{{$lojas->id}}" method="POST">
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
