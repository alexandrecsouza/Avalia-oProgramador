
@extends('layouts.main')

@section('titulo','Venda')

@section('conteudo')


<h1>Venda</h1>



<div>
    <form action="/pesquisa_venda" method="GET">

    <input type="text"name="pesquisa">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/criar_venda"><button>nova Venda</button></a>

</div>




<table>

    <thead>
        <th  scope="col"> ID</th>        
        <th  scope="col"> Nome Loja</th>
        <th  scope="col"> Nome Cliente</th>
        <th  scope="col"> Nome Vendedor</th>
        <th  scope="col"> Valor Total</th>
        <th  scope="col"> Quantidade de produtos </th>
        <th  scope="col"> forma de Pagamento</th>
        <th  scope="col"> Observação</th>
        
        <th  scope="col"></th>
        <th  scope="col"></th>
    </thead>

    <tbody>
        
        <tr>
            <th scope="row">{{$relatorio['id']}}</th>
            <td>{{$relatorio['id']}}</td>
            <td>{{$relatorio['id']}}</td>
            <td>{{$relatorio['id']}}</td>
            <td>{{$relatorio['id']}}</td>
            <td>{{$relatorio['id']}}</td>
            <td>{{$relatorio['id']}}</td>
            <td>{{$relatorio['id']}}</td>
            
            


            <td>
                <form action="/editar_venda/{{$relatorio['id']}}" method="GET">
                <input type="submit" value="editar">
                </form>
            </td>

            <td>
                <form action="/deletar_venda/{{$relatorio['id']}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="excluir">
                </form>
            </td>


        </tr>
        
    </tbody>


</table>


</div>


@endsection
