@extends('layouts.app')

@section('title', 'Pausa | Viaja Distinto')

@section('body-class', 'product-page')

@section('content')
  <div class="header header-filter center-block" style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');">
    <div class="container">
    </div>
    </div>

<div class="main main-raised">
    <div class="container">
    <div class="section">
        <h2 class="title text-center">Editar Producto</h2>
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
        <div class="row">
        <div class="col-sm-6">
	    <div class="form-group label-floating">
		    <label class="control-label">Nombre del Producto</label>
		    <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group label-floating">
		    <label class="control-label">Precio del Producto</label>
            <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', $product->price) }}">
        </div>
        </div>
        <div class="col-sm-12">
	    <div class="form-group label-floating">
		    <label class="control-label">Descripciòn Corta</label>
		    <input type="text" class="form-control" name="description" value="{{ old('description', $product->description) }}">
        </div>
        </div>
        <div class="col-sm-12">
        <textarea class="form-control" placeholder="Descripciòn extensa del producto" rows="5" name="long_description">{{ old('long_description', $product->long_description) }}</textarea></div>
        <div class="col-sm-6"><button class="btn btn-success">Guardar Cambios</button></div>
        <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
        </form>
        </div>
    </div>
</div>
<footer class="footer">
<div class="container">
<!--     <nav class="pull-left">
        <ul>
            <li>
                <a href="http://www.creative-tim.com">
                    Creative Tim
                </a>
            </li>
            <li>
                <a href="http://presentation.creative-tim.com">
                    About Us
                </a>
            </li>
            <li>
                <a href="http://blog.creative-tim.com">
                    Blog
                </a>
            </li>
            <li>
                <a href="http://www.creative-tim.com/license">
                    Licenses
                </a>
            </li>
        </ul>
    </nav>-->
    <div class="copyright pull-center">
        &copy; 2019 <i class="fa fa-heart heart"></i> Laboratoria
    </div>
    </div>
    </footer>
@endsection
