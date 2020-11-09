@extends('layouts.main_layout')

@section('title')
    - Contacts
@endsection

@section('body_background')
    <div class="background-image" style="background-image: url({{url('/img/hero.jpg')}});"></div>
@endsection

@section('content')
    <section class="features my_section">
        <div class="centerer">
            <h3 class="title">Our contacts</h3>
            <p>Catch these links and save them.</p>
            <p class="contacts_links">
                <a href="https://t.me/ZedZarbond"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ryabov_andy/?hl=ru"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="mailto:SnowKimm12345@gmail.com"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
            </p>
       </div>
    </section>
@endsection
