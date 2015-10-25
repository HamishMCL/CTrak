<html>
<head>
	<title>CTrak</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">
</head>
<body>

	<nav>
		
			@yield('nav')
		
		
	
	</nav>
	@include('alerts.failed')
	@include('alerts.success')
	

		@yield('content')

	
</body>
</html>