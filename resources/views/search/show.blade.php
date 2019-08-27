@extends('layouts.app')

@section('title', 'Pausa | Bùsqueda')

@section('body-class', 'profile-page')

@section('content')
<div class="header header-filter" style="background-image: url({{ $product->images()->first()->image }});"></div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="profile">
                        <div class="name">
                            <h3 class="title">Resultados de la busqueda</h3>
                        </div>
                        @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification')}}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="description text-center">
                    <p>Se encontraron {{ $products->count()}} resultados para el termino {{$query}}.</p>
                </div>
                <div class="team text-center">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="team-player">
                        <img src="/img/search.png" alt="ImagenLupa" class="img-cicle img-responsive img-raised ">
                        <h4 class="title">
                            <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
                        </h4>
                        <p class="description">{{ $product->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection