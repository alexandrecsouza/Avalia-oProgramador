

@extends('layouts.main')



@section('conteudo')

<h1>Nova Produto</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_venda" method="post">
@csrf

ID:                 <input id="id" type="text"name="id">  
ID do Cliente:      <input id="id_cliente" type="text"name="id_cliente">  
ID da loja:         <input id="id_loja" type="text"name="id_loja">
ID do Vendedor:     <input id="id_vendedor" type="text"name="id_vendedor">
Data da Venda:      <input id="data" type="date"name="data" min="1900-01-01" max="2100-12-31">

Forma de Pagamento: <input id="pagamento" type="text"name="pagamento">
Observação          <input id="observacao" type="text"name="observacao">


<table id="produtos">

</table>

<button type="button" onclick="adiciona_produto()">adicionar produto</button>

<input type="submit" value="salvar" onclick="return true">

</form>

</div>



<script>

function adiciona_produto(){

    var tabela=document.getElementById("produtos");
    

    conteudo=
    '<tr>'+
    '<td>ID Produto:<input class="id_produto" type="text"name="id_produto[]"></td>'+
    '<td>quantidade:<input type="number"  name="quantidade[]" min="1" value="1" /></td>'+
    '</tr>';

    tabela.insertAdjacentHTML("beforeend", conteudo );
    
}

</script>


@endsection

