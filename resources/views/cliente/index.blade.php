

<h1>Clientes</h1>

{{-- pesquisa --}}
<div>
    <form action="/pesquisacliente" method="GET">

    <input type="text"name="pesquisa">

    <input type="submit" value="pesquisa">
    </form>
</div>



<div>

    <a href="/novocliente"><button>novo cliente</button></a>

</div>



<div>
@foreach ($clientes as $cliente)

<div>
<p>name {{$cliente->nome}}</p>


</div>

@endforeach

</div>