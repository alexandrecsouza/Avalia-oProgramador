
@extends('layouts.main')

@section('titulo','Lojas')

@section('conteudo')


<h1>Vendedor</h1>



<div>
    <form action="/pesquisa_vendedor" method="GET">

    <input type="text"name="pesquisa" placeholder="digite nome ou id">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/criar_vendedor"><button>novo vendedor</button></a>

</div>




<table>

    <thead>
        <th  scope="col"> ID</th>
        <th  scope="col"> ID da Loja</th>
        <th  scope="col"> Nome</th>
        <th  scope="col"> CPF</th>
        
        
        <th  scope="col"></th>
        <th  scope="col"></th>
    </thead>

    <tbody>
    @foreach ($vendedores as $vendedor)
        <tr>
            <th scope="row">{{$vendedor->id}}</th>
            <td>{{$vendedor->id_loja}}</td>
            <td>{{$vendedor->nome}}</td>
            <td>{{$vendedor->cpf}}</td>
            
            


            <td>
                <form action="/editar_vendedor/{{$vendedor->id}}" method="GET">
                <input type="submit" value="editar">
                </form>
            </td>

            <td>
                <form action="/deletar_vendedor/{{$vendedor->id}}" method="POST">
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
