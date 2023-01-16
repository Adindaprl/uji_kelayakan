@extends('layout.input')
@section('input')
    <div class="register">
        <div class="card-register">
           <div class="left">
            <p class="t-left">login</p>
           </div>
           <div class="right">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
             <form action="/login/auth" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn-reg">S E N D</button>
              </form>
           </div>
        </div>
    </div>
@endsection