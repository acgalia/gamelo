<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	@include('header')

	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
</head>
<body>
	@include('nav')

	@yield('body')
	@yield('admin_body')


<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>