@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="header header-warning text-center">
                            <h4>Registro</h4>
                         <!--   <div class="social-line">
                                <a href="#" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>-->
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                            <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
									</div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input type="password" placeholder="Contraseña" class="form-control" id="password" name="password" required />
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required />
                            </div>

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">CONFIRMAR REGISTRO</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
