

<h1>Editar Cliente</h1>



<div>

<form action="/atualizar_cliente/{{$cliente[0]->id}}" method="post">
@csrf
@method('PUT')

ID: <input   type="text"name="id" value="{{$cliente[0]->id}}">  
Nome: <input id="nome" type="text"name="nome" value="{{$cliente[0]->nome}}">  
cpf: <input type="text"name="cpf" value="{{$cliente[0]->cpf}}">
sexo: <input type="text"name="sexo" value="{{$cliente[0]->sexo}}">
Email: <input type="email"name="email" value="{{$cliente[0]->email}}">




<input type="submit" value="atualizar">

</form>

</div>


