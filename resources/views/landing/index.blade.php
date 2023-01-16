@extends('layout.layout')
@section('content')
<div class="home">
    <div class="card-home">
        <div class="left">
            <img src="{{ asset('/assets/img/space.jpg') }}" class="space" alt="">
            <p class="text">Better Solutions For Your Choice Book</p>
            <h4 class="t2"> We can access book for online and free!</h4>
           <div class="register">
            <form action="{{route('register')}}">
                @csrf
            <button class="btn-reg">Resgister</button>
             </form>
        </div>
        </div>
        <div class="right">
            <div class="logo">
                <img class="icon" src="{{ asset('/assets/img/logo (1).svg') }}" alt="">
                <img class="icon" src="{{ asset('/assets/img/logo (2).svg') }}" alt="">
                <img class="icon" src="{{ asset('/assets/img/logo (3).svg') }}" alt="">
            </div>
            <div class="caption">
                <h6 class="cp">Easy Reading</h6>
                <h6 class="cp">Many Source</h6>
                <h6 class="cp">Gain Knowledge</h6>
            </div>
            <p>Get the best quality books! You can read it anywhere and anytime.</p>
            <div class="card-right">
                <img class="img-right" src="{{ asset('/assets/img/right.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="card-about">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam commodi eum sint dolore doloremque repudiandae nostrum tempore vero velit aspernatur nam porro natus deleniti rem, molestias deserunt, autem ipsum nesciunt!
    </div>
</div>
@endsection
