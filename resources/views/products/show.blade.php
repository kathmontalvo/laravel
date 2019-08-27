@extends('layouts.app')

@section('title', 'Pausa | Dashboard')

@section('body-class', 'profile-page')

@section('content')
<div class="header header-filter" style="background-image: url({{ $product->images()->first()->image }});"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <!-- <div class="avatar">
                            <img src="{{ $product->images()->first()->image }}" alt="Circle Image" class="img">
                        </div> -->
                    <div class="name">
                        <h3 class="title">{{ $product -> name }}</h3>
                        <h6>{{ $product -> category->name }}</h6>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p> {{ $product -> long_description }}</p>
            </div>
            <div class="text-center">
                <a href="{{ url('/reservas/'.$product->id)}}" class="btn btn-warning btn-round">
                    <i class="material-icons">add</i> Reservar
                </a>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="profile-tabs">
                        <div class="nav-align-center">
                            <div class="tab-content gallery">
                                <div class="tab-pane active" id="studio">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @foreach ($imagesLeft as $image)
                                            <img src="{{$image->url}}" class="img-rounded" />
                                            @endforeach
                                        </div>
                                        <div class="col-md-6">
                                            @foreach ($imagesRight as $image)
                                            <img src="{{$image->url}}" class="img-rounded" />
                                            @endforeach
                                        </div>
                                        <!-- @foreach ($rooms as $room)
                                            <h1>{{$room}}</h1>
                                        @endforeach -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Profile Tabs -->
                </div>
            </div>

        </div>
    </div>
</div>
@endsection