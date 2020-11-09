@extends('layouts.main_layout')

@section('title')
{{--    @foreach($data as $element)--}}
{{--        {{$element}}--}}
{{--    @endforeach--}}
    - Home
@endsection

@section('body_background')
    <div class="background-image" style="background-image: url({{url('/img/hero.jpg')}});"></div>
@endsection

@section('content')


    <section class="our-work my_section fun">
        <div class="centerer">
            <h3 class="title">Check some of these funny things out</h3>
            <p>Not to say much. Not to show hard stuff. Just to let you enjoy CSS and CSS + JS.</p>

        </div>

        <p class="glitch">
            <span aria-hidden="true">GLITCH EFFECT</span>
            GLITCH EFFECT
            <span aria-hidden="true">GLITCH EFFECT</span>
        </p>

        <div id="calculator">
            <!-- Screen and clear key -->
            <div class="top">
                <span class="clear">C</span>
                <div class="screen"></div>
            </div>

            <div class="keys">
                <!-- operators and other keys -->
                <span>7</span>
                <span>8</span>
                <span>9</span>
                <span class="operator">+</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span class="operator">-</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span class="operator">÷</span>
                <span>0</span>
                <span>.</span>
                <span class="eval">=</span>
                <span class="operator">x</span>
            </div>
        </div>
    </section>


    <section class="features my_section">
        <div class="centerer">
            <h3 class="title">Features and services</h3>
            <p>At this topic you can see our advantages over the others.</p>
        </div>


        <ul class="grid">
            <li>
                <i class="fa fa-codepen" aria-hidden="true"></i>
                <h4>Engineering</h4>
                <p>We provide web-site engineering that helps you to make a decision.</p>
            </li>
            <li>
                <i class="fa fa-cubes"></i>
                <h4>Web Development</h4>
                <p>Our work is a WEB development for you.</p>
            </li>
            <li>
                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                <h4>Connection</h4>
                <p>We are on the way of a good connecting with all of people.</p>
            </li>
        </ul>
    </section>



    <section class="contact my_section">
        <div class="centerer">
            <h3 class="title">Join us here</h3>
            <p>Just send us your name and email, then you will get the newest updates of a cool stuff we provide too.</p>

            <form action="{{route('feedback_submit')}}" method="post">
                @csrf
                    <input class="ml-10" name="name" type="text" placeholder="Your name" id="name">
                    <input class="ml-10" name="email" type="email" placeholder="Email" id="email">
                    <a class="btn m-3"><button type="submit">Subscribe now</button></a>
            </form>
        </div>



    </section>

@endsection


