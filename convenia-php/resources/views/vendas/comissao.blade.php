<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">

    <title>Convenia PHP junior</title>

</head>
<body>
<div class="container-fluid">

    <div class="container">

        <div class="col-md-2 row"></div>
        <div class="col-md-8">

            <ol class="breadcrumb bread">
                <li><a href="{{route('index')}}">Nova Venda</a></li>
                <li class="active">Comissão</li>
            </ol>

            <h2 class="titulo row">
                {{$title}}
            </h2>

            <div class="dados">

                <h2>Nome: {{$vendedor->nome}}</h2>

                <h2>Email: {{$vendedor->email}}</h2>

                <h2>Valor da comissão: R$ {{number_format($insert->valor_comissao, 2, ',','.')}}</h2>
            </div>

        </div>

        <div class="col-md-2" ></div>

    </div><!--End container-->

</div><!--End container-fluid-->

<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>
</html>
