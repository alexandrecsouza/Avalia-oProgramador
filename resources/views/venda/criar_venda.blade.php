

@extends('layouts.main')

@section('titulo','Produto')

@section('conteudo')

<h1>Nova Produto</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_venda" method="post">
@csrf

ID:                 <input id="id" type="text"name="id">  
ID do Cliente:      <input id="id_cliente" type="text"name="id_cliente">  
ID da loja:         <input id="id_loja" type="text"name="cor">
ID do Vendedor:     <input id="id_vendedor" type="text"name="id_vendedor">
Data da Venda:      <input id="data" type="text"name="data">



Forma de Pagamento: <input id="pagamento" type="text"name="pagamento">
Observação          <input id="observacao" type="text"name="observacao">



<input type="submit" value="salvar" onclick="return true">

</form>

</div>




@endsection

