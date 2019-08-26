@extends('layouts.app')

@section('title', 'Pausa | Dashboard')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter center-block" style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');"></div>

<div class="main main-raised">
    <div class="container">
    <div class="section">
        <h2 class="title">Dashboard</h2>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif
        <ul class="nav nav-pills nav-pills-primary" role="tablist">
	<li>
		<a href="#dashboard" role="tab" data-toggle="tab">
			<i class="material-icons">dashboard</i>
			Carrito de Compras
		</a>
	</li>
	<li>
		<a href="#tasks" role="tab" data-toggle="tab">
			<i class="material-icons">list</i>
			Pedidos Realizados
		</a>
	</li>
</ul>
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