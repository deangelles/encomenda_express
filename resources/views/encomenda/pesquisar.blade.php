<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisar Encomendas</title>
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
            background: url(http://www.domidesign.com.br/wp-content/uploads/2015/12/verde-claro.jpg);

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

    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active bg-success text-white" href="http://127.0.0.1:8000/">Eucatur Express</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active bg-success text-white" href="/encomenda/inserir">Inserir Encomendas</a>
        </li>


    </ul>
    <h1 class="mt-2">Pesquisar Encomendas</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{ $mensagem }}</div>
    @endif
    <form action="/encomenda/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token()}}}">
        <div class="form-group">
            <label for="nome_cliente">Nome: </label>
            <input type="text" id="nome_cliente" name="nome_cliente" class="form-control ml-2">
        </div>
        <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
    </form>
    @if(count($encomenda) == 0)
        <div class="alert alert-danger mt-2">Nenhuma encomenda encontrada com essa descrição!</div>
    @else
        <table class="table mt-2 text-center ">
            <tr>
                <th>Id</th>
                <th class="text-left">Nome</th>
                <th>Número da Encomenda</th>
                <th>CPF</th>
                <th>Data da Expedição</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($encomenda as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td class="text-left">{{ $e->nome_cliente }}</td>
                    <td>{{ $e->numero_encomenda }}</td>
                    <td>{{ $e->cpf }}</td>
                    <td>{{ $e->data_expedicao }}</td>
                    <td><a href="/encomenda/excluir/{{ $e->id }}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/encomenda/alterar/{{ $e->id }}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
</body>
</html>