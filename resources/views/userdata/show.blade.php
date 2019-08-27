@extends('layouts.app')

@section('title', 'Pausa | Viaja Distinto')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter text-center"
    style="background-image: url('https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');">
    <div class="container text-center">
    </div>
</div>

<div class="main main-raised">

    <div class="container">

        <div class="section">
            <h2 class="title text-center">Solicitud de reserva</h2>
            <div class="progress progress-line-warning">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                    aria-valuemax="100" style="width: 30%;">
                    <span class="sr-only">30% Complete(warning)</span>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form>
                <div class="col-sm-4">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Nombres</label>
                        <input type="text" class="form-control" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Apellidos</label>
                        <input type="text" class="form-control" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">DNI</label>
                        <input type="text" class="form-control" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Telefono</label>
                        <input type="text" class="form-control" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Provincia/ Distrito /Nacionalidad</label>
                        <input type="text" class="form-control" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <button class="btn btn-success"">
                        Reservar
                    </button>
                </div>
            </form>
            <footer class="footer">
                <div class="container">
                    <div class="copyright pull-center">
                        &copy; 2019 <i class="fa fa-heart heart"></i> Laboratoria
                    </div>
                </div>
            </footer>
            @endsection