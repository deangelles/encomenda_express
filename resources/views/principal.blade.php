<?php $titulo = '';?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo;?></title>
    <style>
        /*
        - Como Fazer Uma Imagem de Fundo Preencher Toda a Tela
        - Autor: Guilherme Müller
        - Site: http://guilhermemuller.com.br/blog/2011/06/08/como-fazer-uma-imagem-de-fundo-preencher-a-tela-inteira/
        */

        /* reset de margens */
        * {
            margin: 0;
            padding:0;
        }

        /* para garantir que estes elementos ocuparão toda a tela */
        body, html {
            width: 100%;
            height: 100%;
            font-family: Arial, Tahoma, sans-serif;
        }

        body {
            background: url(https://scontent.fbsb9-1.fna.fbcdn.net/v/t31.0-8/287049_486729534684841_1490050368_o.jpg?_nc_cat=0&_nc_eui2=v1%3AAeF9lZh6_BPOe8DT6EiZLUOfkjJX_LdBehrU7WgQFcdILg21fCJftEpCe8FYrgC2QU6XIjl0bnvUpU73IQe7Hp52c3cvE0AVmGbHOdl-PXIQvg&oh=2acb5af06fc529a531359bb66c509329&oe=5B6A34E7) center center no-repeat fixed;

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #site {
            width: 560px;
            padding: 20px;
            margin: 40px auto;
            background: #FFF; /* fundo branco para navegadores que não suportam rgba */
            background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
        }

        p {
            margin-bottom: 1.5em;
        }</style>
    <link rel="stylesheet" href="/css/app.css">
    <script lang="text/javascript" src="js/app.js"></script>
</head>
<body>



    <div class="container" >

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active bg-success text-white" href="#">Eucatur Express</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle bg-success text-white" data-toggle="dropdown" href="#">Encomendas</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item bg-success text-white" href="/encomenda/inserir">Inserir Encomendas</a>
                    <a class="dropdown-item bg-success text-white" href="/encomenda/pesquisar">Pesquisar Encomendas</a>
                </div>
            </li>

        </ul>

        <section class="container">
            @yield('miolo')
        </section>

    </div>

</body>
</html>

