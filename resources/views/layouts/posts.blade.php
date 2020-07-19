<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<h2>@yield('title')</h2>
			@if(Session::has('message'))
         {{ Session::get('message') }}

	@endif

		@yield('content')
	</div>
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>

</body>
</html>