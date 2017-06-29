<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">

    <title>Convenia PHP junior</title>

</head>
<body>
<div class="container-fluid">

    <div class="container">

        <h2 class="titulo">
            {{$title}}
        </h2>

        <div class="col-md-2"></div>

        <div class="col-md-8 form">

            @if(isset($errors) && count($errors) > 0)
                <div class="alertas alert-warning">
                    @foreach($errors->all() as $error)
                        <p>
                            {{$error}}
                        </p>
                    @endforeach
                </div>
            @endif

            @if(session('success'))
                <div class="alertas alert-success">
                    <p>
                        {{session('success')}}
                    </p>
                </div>
            @endif

            {!! Form::open(['url'=>'comissao', 'method'=>'POST']) !!}

            <div class="form-group">
                {!! Form::select('id_vendedor', $vendedores, null, ['class'=>'form-control', 'placeholder'=>'Selecione o vendedor', 'title'=>'Selecione o vendedor']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('valor_venda', null, ['class' => 'form form-control', 'placeholder'=>'Valor Venda', 'title'=>'Digite o valor da venda']) !!}
            </div>
            <div class="form-group">
                {!! Form::hidden('valor_comissao') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar Venda', ['class'=>'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div><!--End Form-->

        <div class="col-md-2"></div>

    </div><!--End container-->

</div><!--End Container-fluid -->

<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>
</html>
