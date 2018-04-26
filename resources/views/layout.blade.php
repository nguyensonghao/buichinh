<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
	@include('components.primary-menu')
	<div class="content container">
		@include('components.user-information')
		@yield('content')
	</div>
	<script type="text/javascript" src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/layout.js') }}"></script>
</body>
</html>