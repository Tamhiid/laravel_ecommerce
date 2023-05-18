<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce</title>
    <link href="{{ url('/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/app.min.css') }}" rel="stylesheet">

</head>
<body>
    {{View::make('header')}}
    {{View::make('navbar')}}
    @yield('content')
    {{View::make('footer')}}



     <!-- JAVASCRIPT -->
     <script src="{{ url('/asset/libs/jquery/jquery.min.js') }" ></script>
     <script src="{{ url('/asset/libs/bootstrap/js/bootstrap.bundle.min.js') }" ></script>
     <script src="{{ url('/asset/libs/metismenu/metisMenu.min.js') }" ></script>
     <script src="{{ url('/asset/libs/simplebar/simplebar.min.js') }" ></script>
     <script src="{{ url('/asset/libs/node-waves/waves.min.js') }" ></script>
     <script src="{{ url('/asset/libs/apexcharts/apexcharts.min.js') }" ></script>
     <script src="{{ url('/asset/js/pages/saas-dashboard.init.js') }" ></script>
     <script src="{{ url('/asset/js/app.js') }" ></script>
        
       
       
      
</body>
</html>