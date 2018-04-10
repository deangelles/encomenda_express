<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Encomenda</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-2">Alterar encomenda</h1>
    <form action="/encomenda/alterar" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="id">ID: <span class="text-danger">*</span></label>
            <input type="text" id="id" name="id" class="form-control" required readonly value="{{ $encomendas->id }}">
        </div>
        <div class="form-group">
            <label for="nome_cliente">Nome: <span class="text-danger">*</span></label>
            <input type="text" id="nome_cliente" name="nome_cliente" class="form-control" autofocus required value="{{ $encomendas->nome_cliente }}">
        </div>
        <div class="form-group">
            <label for="numero_encomenda">Número da enconmenda: <span class="text-danger">*</span></label>
            <input type="number" id="numero_encomenda" name="numero_encomenda" class="form-control" required value="{{ $encomendas->numero_encomenda }}">
        </div>
        <div class="form-group">
            <label for="cpf">CPF: <span class="text-danger">*</span></label>
            <input type="number" id="cpf" name="cpf" class="form-control" required value="{{ $encomendas->cpf }}">
        </div>
        <div class="form-group">
            <label for="data_expedicao">Data de expedição: </label>
            <input type="date" id="data_expedicao" name="data_expedicao" class="form-control" value="{{ $encomendas->data_expedicao }}">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Alterar">
    </form>
</div>
</body>
</html>