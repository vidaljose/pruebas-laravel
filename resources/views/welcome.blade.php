<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div>
                    <form action="/inicio" method="post">
                        {{ csrf_field() }}
                        <br>
                        <input type="text"  placeholder="titulo" name="titulo"required>
                        <br>
                        <br>
                        <textarea name="contenido" id="" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    
                    </form>
                </div>
            </div>
            <div class="col-6">
                <br>
                <br>
                <form action="/out" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit">Cerrar session</button>    
                    <br>
                    <br>
                </form>
                <div>
                    @foreach ($nota as $notas)
                    <h3>{{ $notas -> titulo }}</h3>
                    <br>
                    <p> {{ $notas -> contenido }}</p>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>

        <br>
        <br>
      
    </div>

</body>