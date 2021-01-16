<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
        <!-- Font-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('site/wizard/css/muli-font.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('site/wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        <!-- datepicker -->
        <link rel="stylesheet" type="text/css" href="{{asset('site/wizard/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('site/wizard/vendor/bootrap/css/bootstrap.min.css')}}">
        <!-- Main Style Css -->
        @yield('style-num')

        <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    </head>
    <body class="bg-white">

        <div class="content">
            @yield('content')
        </div>


        <!-- footer -->
        @include('site.includes.footer')
        @jquery
        @toastr_js
        @toastr_render
        <script src="{{asset('site/js/jquery-3.4.1.slim.min.js')}}"></script>
        <script src="{{asset('site/js/popper.min.js')}}"></script>
        <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('site/wizard/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('site/wizard/js/jquery.steps.js')}}"></script>
        <script src="{{asset('site/wizard/js/jquery-ui.min.js')}}"></script>
        @yield('script-num')
        <script src="{{asset('site/wizard/js/main-three.js')}}"></script>
    </body>
</html>
