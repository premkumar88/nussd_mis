<html>
	<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
			NUSSD
		</title>
		{{HTML::style('assets/bootstrap/css/bootstrap.css')}}
		{{HTML::style('assets/bootstrap/css/bootstrap-theme.css')}}
		{{HTML::style('css/nussd_css.css')}}
		{{HTML::style('css/style.css')}}

		{{HTML::style('assets/font-awesome/css/font-awesome.css')}}
		{{HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}


	</head>

	<body>

				@include('layouts/header')

				@yield('content')
			
				@include('layouts/footer')


		{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}
		{{HTML::script('assets/bootstrap/js/bootstrap.js')}}

	</body>
</html>