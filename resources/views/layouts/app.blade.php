<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Торты и десерты на заказ">
    <meta name="keywords" content="кондитер,торты,десерты,заказ,праздник,Минск">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>@yield('title-block')</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">

</head>
<header>
    @include('layouts.header')
</header>
<body style="background-color: Silver;">
<div class="mt-5">
    @include('layouts.messages')
    @yield('content')
</div>
</body>
<footer style="background-color: #1a202c">
    @include('layouts.footer')
</footer>
</html>
