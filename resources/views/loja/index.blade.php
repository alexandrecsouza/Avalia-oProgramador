
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
        <th  scope="col"> CNPJ</th>
        <th  scope="col"> CEP</th>
        <th  scope="col"> Endereço</th>
        <th  scope="col"> Bairro</th>
        <th  scope="col"> Cidade</th>
        <th  scope="col"> UF</th>
        
        <th  scope="col"></th>
        <th  scope="col"></th>
    </thead>

    <tbody>
    @foreach ($lojas as $loja)
        <tr>
            <th scope="row">{{$loja->id}}</th>
            <td>{{$loja->nome}}</td>
            <td>{{$loja->cnpj}}</td>
            <td>{{$loja->cep}}</td>
            <td>{{$loja->endereco}}</td>
            <td>{{$loja->bairro}}</td>
            <td>{{$loja->cidade}}</td>
            <td>{{$loja->uf}}</td>
            


            <td>
                <form action="/editar_lojas/{{$loja->id}}" method="GET">
                <input type="submit" value="editar">
                </form>
            </td>

            <td>
                <form action="/deletar_loja/{{$loja->id}}" method="POST">
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
