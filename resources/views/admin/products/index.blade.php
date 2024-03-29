@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('body-class', 'product-page')

@section('content')
  <div class="header header-filter center-block" style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');">
    <div class="container">
    </div>
    </div>

<div class="main main-raised">
    <div class="container">
    <div class="section text-center">
        <h2 class="title">Listado de Paquetes Disponibles</h2>
        <div class="team">
        <div class="row">
        <a href="{{url('/admin/products/create')}}" class="btn btn-default">Nuevo Producto</a>
        <table class="table">
        <thead>
        <tr>
        <th class="text-center">#</th>
        <th class="col-md-2 text-center">Nombre</th>
        <th class="col-md-5 text-center">Descripciòn</th>
        <th class="text-center">Categoria</th>
        <th class="text-right">Precio</th>
        <th class="text-right">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
        <td class="text-center">{{ $product-> id }}</td>
        <td>{{ $product-> name }}</td>
        <td class="col-md-4">{{ $product-> description }}</td>
        <td>{{ $product-> category ? $product->category->name: 'General' }}</td>
        <td class="text-right">S/. {{ $product-> price }}</td>
        <td class="td-actions text-right">
        <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
        @csrf
        {{ method_field('DELETE') }}
        <a href="#" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
        <i class="fa fa-info"></i>
        </a>
        <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
        <i class="fa fa-edit"></i>
        </a>
        <a href="{{ url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imàgenes del Producto" class="btn btn-warning btn-simple btn-xs">
        <i class="fa fa-image"></i>
        </a>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-simple btn-xs">
        <i class="fa fa-times"></i>
        </button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
            </div>
        </div>
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
