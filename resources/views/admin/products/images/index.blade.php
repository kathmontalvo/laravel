@extends('layouts.app')

@section('title', 'Imagenes de Productos')

@section('body-class', 'product-page')

@section('content')
  <div class="header header-filter center-block" style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');">
    <div class="container">
    </div>
    </div>

<div class="main main-raised">
    <div class="container">
    <div class="section text-center">
        <h2 class="title">Imagenes del Producto "{{ $product->name }}"</h2>
    
        <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" required>
        <button type="submit" class="btn btn-default">Subir nueva Imagen</button>
        <a href="{{url('/admin/products')}}" class="btn btn-default">Volver al listado de Productos</a>
        </form>
<hr/>
        <div class="row">
        @foreach ($images as $image)
        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
            <img width="400" height="200" src="{{ $image->url }}">
            <button type="submit" class="btn btn-danger">Eliminar Imagen</button>
        </div>
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
