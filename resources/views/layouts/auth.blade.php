<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>

	@stack('prepend-style')
	@include('includes.style')
	@livewireStyles
	@stack('addon-style')

</head>
<body>

	@include('includes.sidebar')
	<div class="main-content" id="panel">
		@include('includes.navbar')
		@yield('content')
	</div>

	@stack('prepend-script')
	@include('includes.script')
	@include('includes.modals.main-modal')
	@livewireScripts
	@stack('addon-script')

</body>
</html>