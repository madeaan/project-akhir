<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ url('./css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@yield('style')
</head>
<body>
@include('navbar')
@yield('content')
      <script src="{{ url('./js/bootstrap.bundle.min.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="script.js"></script>
@yield('script')
</body>
</html>
