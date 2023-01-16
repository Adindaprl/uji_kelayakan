<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/index.css') }}">
</head>

<body>
    <nav class="nav-card" style="position: fixed">
        <div class="nav d-flex">
            <a class="navbar">WISpBook</a>
            <a class="menu">Home</a>
            <a class="login" href="{{route('login')}}">Login</a>
        </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
