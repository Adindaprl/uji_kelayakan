@extends('layout.input')
@section('input')
    <div class="register">
        <div class="card-register">
           <div class="left">
            <p class="t-left">Create your account and find interesting things!</p>
           </div>
           <div class="right">
            <h2 class="mb-3">Register _________________</h2>
             <form action="{{route('register.account')}}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Address" name="address">
                  </div>
                  <div class="mb-3">
                    <input type="integer" class="form-control" placeholder="Number Phone" name="number">
                  </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn-reg">S E N D</button>
              </form>
           </div>
        </div>
    </div>
@endsection