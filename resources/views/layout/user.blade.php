<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=1.0">
        <title>La Molisana - @yield('titolo')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://kit.fontawesome.com/29630d724d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('partials.header')        
        @yield('main')
        @include('partials.footer')


        @yield('script')
    </body>
</html>
