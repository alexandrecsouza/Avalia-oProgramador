

<h1>Novo Cliente</h1>



<div>

<form action="/salvar_cliente" method="post">
@csrf

ID: <input id="id" type="text"name="id">  
Nome: <input id="nome" type="text"name="nome">  
cpf: <input type="text"name="cpf">
sexo: <input type="text"name="sexo">
Email: <input type="email"name="email">




<input type="submit" value="salvar" onclick="return validacao()">

</form>

</div>






<script>

function validacao(){

var nome= document.getElementById("nome");


if(nome.value==""){
alert("Nome vazio");
nome.focus();
return false;
}
return true;
}

</script>