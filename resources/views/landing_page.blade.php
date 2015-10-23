<html>
<head>
	<title>CTrak</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">
</head>
<body>

	<nav>
		<div class="container">
				<form role="form" method="" action="{{ route('dashboard') }}" style="padding: 20px; margin: 10px;display: inline; float: right;">
		
				<!-- <label for="username">Username</label> -->
				<input id="textinput" name="textinput" placeholder="USERNAME" type="text" class="form-control">
				<!-- <input type="text" id="username" value=""></input> -->
				<!-- <label for="password">Password</label> -->
				<!-- <input type="password" id="password" value=""></input> -->
				 <input id="textinput" name="textinput"  placeholder="PASSWORD" type="text" class="form-control">
				 <button  id="signin_btn"type="submit" class="btn btn-primary">Sign in</button>
				<!-- <input type="submit" value="Sign in"> </input> -->

				<input type="hidden" name="_token" value="{{Session::token() }}"></input>
			</form>
			@yield('nav')
		</div>
		
	
	</nav>
	@include('alerts.failed')
	<div class="container">

		@yield('content')

	</div>
</body>
</html>