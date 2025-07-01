<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aventones</title>@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <img src="{{ asset('imagenes/logoAventones.png') }}" alt="Logo">

    @if (!request()->routeIs('welcome') && !request()->routeIs('register'))
        <nav class="navbar">
            <a href="{{ route('bookings') }}">Home</a>
            <a href="{{ route('myRides') }}">Rides</a>
            <a href="{{ route('bookings') }}">Bookings</a>
            <input type="text" placeholder="Search..." class="search-bar">

        </nav>
    @endif

    
    <div class="titulos">
        {{ $slot }}
    </div>
</body>
</html>