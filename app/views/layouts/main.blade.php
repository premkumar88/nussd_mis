<html>
	<head>
		<title>
			Our Todo App
		</title>
		{{HTML::style('assets/bootstrap/css/bootstrap.css')}}
		{{HTML::style('assets/bootstrap/css/bootstrap-theme.css')}}
		{{HTML::style('css/nussd_css.css')}}
		{{HTML::style('css/style.css')}}

	</head>

	<body>

		<div class="container">
			@yield('content')
		</div>

		{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}
		{{HTML::script('assets/bootstrap/js/bootstrap.js')}}
		{{HTML::script('assets/bootstrap/js/npm.js')}}

	</body>
</html>