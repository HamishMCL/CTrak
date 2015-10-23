<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{ asset("css/dashboard.css")}}">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<nav>
	<h2 style="margin: 0px; padding: 5px; display: block; text-align: center; color: black;">CTrak</h2>
	<ul>
		<li><a href="{{ route('newinnings') }}">New Innings</a></li>
		<li><a href="{{ route('settings') }}">Settings</a></li>
		<li><a href="{{ route('landingpage') }}">Log out</a></li>
	</ul>
</nav>

<div>
	@yield('content')

</div>

</body>
</html>