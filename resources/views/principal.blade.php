<?php $titulo = '';?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="/css/app.css">
    <script lang="text/javascript" src="js/app.js"></script>
</head>
<body>

    <div class="container" >

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/encomenda/inserir">Inserir</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>

        </ul>

        <section class="container">
            @yield('miolo')
        </section>

    </div>

</body>
</html>

