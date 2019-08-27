@extends('layouts.app')

@section('title', 'Pausa | Dashboard')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter center-block"
    style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title">Dashboard</h2>
            @if (session('status'))
            <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                    <label class="control-label">Nombres</label>
                    <input type="text" value="Success" class="form-control" />
                    <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                    <label class="control-label">Apellidos</label>
                    <input type="text" value="Success" class="form-control" />
                    <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                    <label class="control-label">DNI</label>
                    <input type="text" value="Success" class="form-control" />
                    <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                    <label class="control-label">Telefono</label>
                    <input type="text" value="Success" class="form-control" />
                    <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                    <label class="control-label">Provincia/ Distrito /Nacionalidad</label>
                    <input type="text" value="Success" class="form-control" />
                    <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                    </span>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="copyright pull-center">
                        &copy; 2019 <i class="fa fa-heart heart"></i> Laboratoria
                    </div>
                </div>
            </footer>
            @endsection

            <title>Room {{ $room->id }}</title>
            </head>

            <body>
                <h1>Room {{ $room->id }}</h1>

            </body>

            </html>