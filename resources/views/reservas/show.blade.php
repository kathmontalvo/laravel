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
            <h2 class="title text-center">{{ old('name', $product->name) }}</h2>
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
            <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
                @csrf
                <div class="col-sm-3">
                <div class="alert alert-danger">
                        <div class="container-fluid">
                            <div class="alert-icon">
                                <span><strong>Desde S/. {{ $product->price }}</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <input class="datepicker form-control" type="text" value="08/27/2019" />
                    Elige la Fecha
                    <!-- javascript -->
                    <script>
                    $('.datepicker').datepicker({
                        weekStart: 1
                    });
                    </script>
                </div>
                <div class="form-group col-sm-4">
                    <label class="control-label">Nro de personas</label>
                    <input class="form-control" type="number" value="1">
                </div>

                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="form-group">
                            <ul class="nav nav-pills nav-pills-warning" role="tablist">
                                <li>
                                    <a href="#dashboard" role="tab" data-toggle="tab">
                                        <i class="material-icons">hotel</i>
                                        2D/1N
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#schedule" role="tab" data-toggle="tab">
                                        <i class="material-icons">hotel</i>
                                        3D/2N
                                    </a>
                                </li>
                                <li>
                                    <a href="#tasks" role="tab" data-toggle="tab">
                                        <i class="material-icons">hotel</i>
                                        4D/3N
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="form-group col-sm-4">
                    <label class="control-label">Tipo de Habitaciòn</label>
                    <select class="form-control">
                        <option>Doble</option>
                        <option>Simple</option>
                    </select>
                </div>
                <hr />
                <div class="col-sm-8">
                    <div class="col-sm-4"><button class="btn btn-success" href="{{ url('/login') }}">Continuar</button>
                    </div>
                    <div class="col-sm-4"><a href="{{ url('/') }}" class="btn btn-success">Cancelar</a></div>
            </form>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="copyright pull-center">&copy; 2019 <i class="fa fa-heart heart"></i> Laboratoria</div>
    </div>
</footer>
@endsection