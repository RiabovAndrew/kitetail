@extends('layouts.main_layout')

@section('title')
    - About
@endsection

@section('body_background')
    <div class="background-image" style="background-image: url({{url('/img/hero.jpg')}});"></div>
@endsection

@section('content')

    <section class="features my_section">
        <div class="centerer">
            <h3 class="title">Where to live in paint</h3>
            <iframe width="710" height="400" src="https://www.youtube.com/embed/hctZZOAT970" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="features my_section">
        <div class="centerer">
            <h3 class="title">About us</h3>
            <p>A short one page of the laconic information about founder and R_Lab team.</p>
        </div>

        <div class="my_row">
            <div><img src="{{asset('/img/about.jpg')}}"></div>
            <div>
                <ul>
                    <li>Founder: </li>
                    <li>How old: </li>
                    <li>Studying: </li>
                    <li>----------</li>
                    <li>About us: </li>
                    <li></li>
                    <li>Who we are: </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Andrey Riabov</li>
                    <li>19 yo</li>
                    <li>DNU, Dnipro</li>
                    <li>----------</li>
                    <li>A great small team that always takes complex tasks and complete them</li>
                    <li>We are novices who want to be a cool prog-players in a game called life</li>
                </ul>
            </div>
        </div>
    </section>


@endsection
