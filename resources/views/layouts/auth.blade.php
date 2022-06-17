<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title><link rel="shortcut icon" href="{{ url('frontend/images/favicon.png') }}" type="image/x-icon">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link rel="stylesheet" href="{{ url('frontend/assets/vendor/nucleo/css/nucleo.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/vendors/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/argon.css?v=1.1.0') }}">
	<link rel="stylesheet" href="{{ url('frontend/styles/master.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">

</head>
<body class="bg-default">
  
	@yield('content')

	<script src="{{ url('frontend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ url('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ url('frontend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
	<script src="{{ url('frontend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
	
	<script src="{{ url('frontend/assets/js/argon.js?v=1.1.0') }}"></script>
	
	<script src="{{ url('frontend/assets/js/demo.min.js') }}"></script>
	<script src="{{ url('frontend/scripts/main.js') }}"></script>

</body>
</html>