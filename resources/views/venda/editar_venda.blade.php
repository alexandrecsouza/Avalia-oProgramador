


@extends('layouts.main')



@section('conteudo')

<h1>Editar Venda</h1>


<script scr="/js/scripts.js"></script>
<div>

<form action="/atualizar_venda/{{$valor['id']}}" method="post">
@csrf
@method('PUT')

<table>

<tr>
    <td>
    ID:
    </td>
    <td>
    <input id="id" type="text"name="id" value="{{$valor['id']}}">
    </td>
</tr>
<tr>
    <td>
    ID do Cliente:
    </td>
    <td>
    <input id="id_cliente" type="text"name="id_cliente" value="{{$valor['id_cliente']}}">  
    </td>
</tr>
<tr>
    <td>
    ID da loja:
    </td>
    <td>
    <input id="id_loja" type="text"name="id_loja" value="{{$valor['id_loja']}}">
    </td>
</tr>


<tr>
    <td>
    ID do Vendedor: 
    </td>
    <td>
    <input id="id_vendedor" type="text"name="id_vendedor" value="{{$valor['id_vendedor']}}">
    </td>
</tr>

<tr>
    <td>
    Data da Venda: 
    </td>
    <td>
    <input id="data" type="date"name="data" min="1900-01-01" max="2100-12-31" value="{{$valor['data']}}">
    </td>
</tr>

<tr>
    <td>
    Forma de Pagamento:
    </td>
    <td>
        

    <select  id="pagamento" name="pagamento" value="{{$valor ['pagamento']}}">        
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
    <textarea id="observacao" type="text"name="observacao" text="texto">{{$valor['observacao']}}</textarea>
    </td>
</tr>

</table>


<table id="produtos">

    @for($i=0;$i< sizeof($valor['id_produtos']);$i++)    

    <tr>
    <tr>
    <td>ID Produto:<input class="id_produto" type="text"name="id_produto[]" value="{{$valor['id_produtos'][$i]}}"></td>
    <td>quantidade:<input type="number"  name="quantidade[]" min="0" value="{{$valor['qtd_produtos'][$i]}}" /></td>
    <td>
    <button type="button" >remover</button>
    </td>
    </tr>


    

    @endfor
</table>


<button type="button" onclick="adiciona_produto()">adicionar produto</button>

<input type="submit" value="salvar" onclick="return validacao_venda()">

</form>

</div>




<script>

var i=0;
var n_itens=1;

function adiciona_produto(){

    var tabela=document.getElementById("produtos");
    

    conteudo=
    '<tr   id= "produto_'+  i +  '">'+
    '<td>ID Produto:<input class="id_produto" type="text"name="id_produto[]" value="000"></td>'+
    '<td>quantidade:<input type="number"  name="quantidade[]" min="0" value="0" /></td>'+
    '<td>'+
    
    '<button type="button" onclick=\'remove_produto("produto_'+i+'")\'>remover</button>'+

    '</td>'+
    '</tr>';

    tabela.insertAdjacentHTML("beforeend", conteudo );
    i++;
    n_itens++;
}


function remove_produto(id){

    var tabela=document.getElementById(id);

    tabela.innerHTML=" ";
    tabela.remove();
    n_itens--;

    if(n_itens<1){
        adiciona_produto();
    }

    console.log(id);
}

</script>



@endsection

