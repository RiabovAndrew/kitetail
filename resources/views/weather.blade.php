@extends('layouts.main_layout')

@section('title')
    - Weather
@endsection

@section('body_background')
    <div class="background-image" style="background-image: url({{url('/img/weather.jpg')}});"></div>
@endsection

@section('content')
    <section class="features my_section">
        <div class="centerer">
            <h3 class="title">What is the weather today?</h3>
            <p>At this small and so much useful page yr attention is gonna be taken by the weather forecast.</p>
        </div>


        <ul class="grid">
            <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h4>Placeholder is {{$data[0]}}</h4>
            </li>
            <li>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <h4>Temperature is {{$data[2]}}</h4>
            </li>
            <li>
                <i class="fa fa-info" aria-hidden="true"></i>
                <h4>Type of the weather is {{$data[1]}}</h4>
            </li>
        </ul>
    </section>
@endsection
