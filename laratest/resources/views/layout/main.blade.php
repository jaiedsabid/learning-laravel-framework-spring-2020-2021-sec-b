<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        @yield('css')
    </style>
</head>
<body>
    <div id="nav-bar">
        @yield('nav-bar')
    </div>
    <div id="page-title">
        @yield('page-title')
    </div>
    <div id="main-content">
        @yield('main-content')
    </div>
    @yield('message')
    <footer id="footer">
        @yield('footer')
    </footer>
</body>
</html>
