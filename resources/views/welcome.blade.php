@extends('layouts.app')

@section('title', 'Pausa | Viaja Distinto')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        .team .row .col-md-4{
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
  <div class="header header-filter center-block" style="background-image: url('https://images.unsplash.com/photo-1528255915607-9012fda0f838?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1259&q=80');">
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
        <h2 class="title">Paquetes Disponibles</h2>

        <div class="team">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="team-player">
                        <img width="200" height="120" src="{{ $product->images()->first()->image }}" alt="Picture" class="img-raised">
                        <h4 class="title">
                            <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }} </a>
                            <br />
                            <small class="text-muted">{{ $product->category->name }}</small>
                        </h4>
                        <p class="description">{{ $product->description }}</p>
                       
                    </div>
                </div>
                @endforeach
        <!--     <div class="col-md-4">
                    <div class="team-player">
                        <img src="../assets/img/christian.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                        <h4 class="title">Christian Louboutin<br />
                            <small class="text-muted">Designer</small>
                        </h4>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-player">
                        <img src="../assets/img/kendall.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                        <h4 class="title">Kendall Jenner<br />
                            <small class="text-muted">Model</small>
                        </h4>
                        <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                        <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>-->
            </div>
        </div>

    </div>


 <!-- <div class="section landing-section">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center title">Work with us</h2>
                <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Your Name</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Your Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Your Messge</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button class="btn btn-primary btn-raised">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>-->

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
