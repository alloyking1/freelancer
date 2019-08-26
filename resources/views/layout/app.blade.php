<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- include styles -->
        <link rel="stylesheet" href="{{asset('assets/theme_asset/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/theme_asset/css/demo.css')}}">
        <link rel="stylesheet" href="{{asset('assets/theme_asset/css/material-dashboard.css')}}">

        <!-- custom style -->
        <link rel="stylesheet" href="{{asset('assets/custom_style/index_style.css')}}">

        <!--     Fonts and icons     -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

        <title>{{config('app.name', 'lsapp')}}</title>
    </head>
    
    <!-- tawkto -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c3de9dcab5284048d0d11b9/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    
    
    <body class="relative">
        @yield('content')
    </body>

    <!-- include js files -->
    <!--   Core JS Files   -->
	<script src="{{asset('assets/theme_asset/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('assets/theme_asset/js/bootstrap.min.js')}}" type="text/javascript"></script>
    
	<script src="{{asset('assets/theme_asset/js/material.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('assets/theme_asset/js/chartist.min.js')}}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{asset('assets/theme_asset/js/bootstrap-notify.js')}}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{asset('assets/theme_asset/js/material-dashboard.js')}}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{asset('assets/theme_asset/js/demo.js')}}"></script>
</html>