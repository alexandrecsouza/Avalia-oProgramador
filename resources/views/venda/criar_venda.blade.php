

@extends('layouts.main')



@section('conteudo')

<h1>Nova Venda</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/salvar_venda" method="post">
@csrf


<table>

<tr>
    <td>
    ID:
    </td>
    <td>
    <input id="id" type="text"name="id" value="000">
    </td>
</tr>
<tr>
    <td>
    ID do Cliente:
    </td>
    <td>
    <input id="id_cliente" type="text"name="id_cliente" value="000">  
    </td>
</tr>
<tr>
    <td>
    ID da loja:
    </td>
    <td>
    <input id="id_loja" type="text"name="id_loja" value="000">
    </td>
</tr>


<tr>
    <td>
    ID do Vendedor: 
    </td>
    <td>
    <input id="id_vendedor" type="text"name="id_vendedor" value="000">
    </td>
</tr>

<tr>
    <td>
    Data da Venda: 
    </td>
    <td>
    <input id="data" type="date"name="data" min="1900-01-01" max="2100-12-31" value="2020-01-01">
    </td>
</tr>

<tr>
    <td>
    Forma de Pagamento:
    </td>
    <td>
        

    <select  id="pagamento" name="pagamento">        
        <option value="dinheiro">Dinheiro</option>
        <option value="credito">Crédito</option>
        <option value="debito">Débito</option>
    </select >

    </td>
</tr>

<tr>
    <td>
    Observação:
    </td>
    <td>
    <textarea id="observacao" type="text"name="observacao" >observacao</textarea>
    </td>
</tr>

</table>



<table id="produtos">

</table>

<button type="button" onclick="adiciona_produto()">adicionar produto</button>

<input type="submit" value="salvar" onclick="return true">

</form>

</div>



<script>

window.onload=adiciona_produto();

function adiciona_produto(){

    var tabela=document.getElementById("produtos");
    

    conteudo=
    '<tr>'+
    '<td>ID Produto:<input class="id_produto" type="text"name="id_produto[]" value="000"></td>'+
    '<td>quantidade:<input type="number"  name="quantidade[]" min="0.00" value="0.00" /></td>'+
    '</tr>';

    tabela.insertAdjacentHTML("beforeend", conteudo );
    
}

</script>


@endsection

