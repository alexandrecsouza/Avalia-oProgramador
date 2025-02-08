

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="/css/style.css">

    <script scr="/js/script.js"></script>


</head>
<body>
   
<header>
    <nav>
    <a href="">Clientes</a>
    </nav>
</header>

@yield('conteudo')

<footer>

</footer>

<script>

console.log("funcionando");



    function validacao_cliente(){

        var id= document.getElementById("id");
        var nome= document.getElementById("nome");
        var cpf= document.getElementById("cpf");
        
        var email= document.getElementById("email");
        
        
        if(id.value==""){
        alert("ID vazio");
        id.focus();
        return false;
        }

        if(nome.value==""){
        alert("Nome vazio");
        nome.focus();
        return false;
        }
        if(cpf.value==""){
        alert("CPF vazio");
        nome.focus();
        return false;
        }
        if(email.value==""){
        alert("email vazio");
        nome.focus();
        return false;
        }
        




        return true;

        }

    
</script>


</body>
</html>