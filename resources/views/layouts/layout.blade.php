<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Domine&family=Open+Sans:wght@300;400&display=swap');
    </style>
    <title>@yield('title', 'Eco Hotel')</title>
</head>
<body>
@include('include.header')
@yield('content')
</body>
</html>
