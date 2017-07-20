
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>@yield('title')</title>

	<!-- Bootstrap Core CSS -->
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('css/sb-admin.css')}}" rel="stylesheet">

    
    <!-- Custom Fonts -->
    <link href="{{URL::to('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="{{URL::to('css/main.css')}}">

	@yield('styles')

</head>
<body>
@include('includes.header')

<div id="wrapper">
	@yield('content')
</div>

    <!-- jQuery -->
    <script src="{{URL::to('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>

    @yield('javascript')
     

</body>
</html>