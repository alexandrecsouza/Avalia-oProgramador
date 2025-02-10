

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="/css/style.css">

    
    <script src="/js/script.js"></script>
    <script src="/js/cliente.js"></script>
    <script src="/js/loja.js"></script>

</head>
<body>
   
<header>
    <nav>
    <a href="/cliente">clientes</a>

    <a href="/loja">lojas</a>

    <a href="/vendedor">vendedor</a>

    <a href="/produto">produto</a>

    <a href="/venda">venda</a>
    </nav>
</header>

@yield('conteudo')

<footer>

</footer>

<script>


    
</script>


</body>
</html>