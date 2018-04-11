<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Encomenda</title>
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
            <a class="nav-link active bg-success text-white" href="/encomenda/pesquisar">Pesquisar Encomendas</a>
        </li>


    </ul>
    <h1 class="mt-2">Inserir Encomenda</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success">Encomenda inserido com sucesso!</div>
    @endif
    <form action="/encomenda/inserir" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="nome_cliente">Nome: <span class="text-danger">*</span></label>
            <input type="text" id="nome_cliente" name="nome_cliente" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="numero_encomenda">Numero da Encomenda: <span class="text-danger">*</span></label>
            <input type="number" id="numero_encomenda" name="numero_encomenda" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF: <span class="text-danger">*</span></label>
            <input type="number" id="cpf" name="cpf" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data_expedicao">Data de Expedição: </label>
            <input type="date" id="data_expedicao" name="data_expedicao" class="form-control">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Inserir">
    </form>
</div>

</body>
</html>
