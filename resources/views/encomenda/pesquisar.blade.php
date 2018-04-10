<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisar produtos</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-2">Pesquisa de encomendas</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{ $mensagem }}</div>
    @endif
    <form action="/encomenda/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="nome_cliente">Nome: </label>
            <input type="text" id="nome_cliente" name="nome_cliente" class="form-control ml-2">
        </div>
        <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
    </form>
    @if(count($encomenda) == 0)
        <div class="alert alert-danger mt-2">Nenhuma encomenda encontrada com essa descrição!</div>
    @else
        <table class="table mt-2 text-center">
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