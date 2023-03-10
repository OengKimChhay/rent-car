<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src ="https://code.jquery.com/jquery-3.6.3.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="{{ asset('js/custom.js') }}" ></script>
    @yield('script')
</body>
</html>