@extends('layouts.app')

@section('title', 'Pausa | Viaja Distinto')

@section('body-class', 'landing-page')

@section('styles')
<style>
.team .row .col-md-4 {
    margin-bottom: 5em;
}

/* .row{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:        flex;
            flex-wrap: wrap;
        }
        .row > [class*='col-'] {
            display: flex;
            flex-direction: column;
        } */
</style>
@endsection

@section('content')
<link rel="icon" type="image/png" href="{{asset('/images/img/favicon.png')}}" />
<div class="header header-filter center-block"
    style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h2>Haz una</h2>
                <h1 class="title">pausa</h1>
                <img src="{{asset('/img/pausa-icon.png')}}" alt="img" class="img-raised">
                <h1 class="title">viaja</h1>
                <h2>distinto</h2>
                <br />
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Visita nuestras categorias</h2>
            <form class="form-inline" method="get" action="{{ url('/search')}}">
                <input type="text" placeholder="¿Què producto buscas?" class="form-control" name="query">
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>
            <div class="team">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="alert alert-warning">
                                <div class="container-fluid">
                                    <div class="alert-icon">
                                        <span><strong>Desde S/. {{ $product->price }}</strong></span>
                                    </div>
                                </div>
                            </div>
                            <img width="200" height="120" src="{{ $product->images()->first()->image }}" alt="Picture"
                                class="img-raised">
                            <h4 class="title">
                                <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }} </a>
                                <br />
                                <small class="text-muted">{{ $product->category->name }}</small>
                            </h4>
                            <p class="description">{{ $product->description }}</p>

                        </div>
                    </div>
                    @endforeach
                </div>
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