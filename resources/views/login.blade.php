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
        <br>
        <br>
        <div class="row">
            <div class="col-3">
                <div>

                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <form action="/login" method="post">
                    {{ csrf_field() }}
                        <div class="card-body">
                            <h5 class="card-title">Usuario</h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" aria-label="Usuario" aria-describedby="basic-addon1">
                            </div>
                            <h5 class="card-title">Contraseña</h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Contraseña" name="pass" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div class="text-right">
                                <button class="btn" type="submit">ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div>

                </div>
            </div>

            <br>
            <br>

        </div>

</body>