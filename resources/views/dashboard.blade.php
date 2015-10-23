<html>
<head>
	<title>Dashboard</title>
	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="{{ asset("css/dashboard.css")}}">

</head>
<body>

<nav>
	<div class="container">
		<h2 style="margin: 0px; padding: 5px; display: inline-block; text-align: center; color: #484848;padding: 15px;">CTrak</h2>
		<ul>
			<li><a href="{{ route('newinnings') }}">New Innings</a></li>
			<li><a href="{{ route('settings') }}">Settings</a></li>
			<li><a href="{{ route('landingpage') }}">Log out</a></li>
		</ul>
	</div>

</nav>

<div class="container" style="background-color:#F6F6F6; width: 100%;">
	<!-- @yield('content') -->

</div>

</body>
</html>