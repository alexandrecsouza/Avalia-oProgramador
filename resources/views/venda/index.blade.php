
@extends('layouts.main')

@section('titulo','Venda')

@section('conteudo')


<h1>Venda</h1>



<div>
    <form id="pesquisa" action="/pesquisa_venda" method="GET">

    <div>
        <input type="text"name="pesquisa" placeholder="id, cliente, loja ou vendedor">

        <input type="submit" value="pesquisa" >
        

        
        <input type="checkbox" id="tem_data" name="tem_data" />
        <label for="tem_data">fitrar data:</label>
        <input id="data" type="date"name="data" min="1900-01-01" max="2100-12-31" value="2020-01-01">


    </div>
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
        @foreach($relatorios as $relatorio)
        <tr>
            <th scope="row">{{$relatorio['id']}}</th>
            <td>{{$relatorio['nome_loja']}}</td>
            <td>{{$relatorio['nome_cliente']}}</td>
            <td>{{$relatorio['nome_vendedor']}}</td>
            <td>{{$relatorio['valor']}}</td>
            <td>
            @foreach($relatorio['quantidade'] as $qtd)
            <li> {{$qtd }} </li>
            @endforeach
            </td>

            <td>{{$relatorio['pagamento']}}</td>
            <td>{{$relatorio['observacao']}}</td>
            
            
            
            


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
        @endforeach
    </tbody>


</table>


</div>


@endsection
