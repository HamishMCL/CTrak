<html>
<head>
	<title>CTrak</title>
	<link rel="shortcut icon" href="/CTrak/Images/Ball-Favicon.png">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

	<nav>
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
	
	</nav>
	@include('alerts.failed')
	<div class="container">


		<h1 style="padding: 20px; margin: auto; text-align: center; font-size: 50px; color:  ; font-family: 'Open Sans', sans-serif;">CTrak</h1>
		<h1 style="padding: 20px; margin: auto; text-align: center; color: #35B0F2 ; font-family: 'Open Sans', sans-serif;">Sign Up.</h1>

		<form class="form-horizontal"  role="form" method="POST" action="{{ route('landingpage') }}" style=" margin: auto;display: block; width: 50%;text-align: center;">

			  <div class="form-group" style=" display: block;"> 
			 	 <label class="control-label"  style="padding:0px;margin:0px;" for="textinput">Username:</label>  
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			  </div>

			   <div class="form-group" style=" display: block;"> 
			 	 <label class="control-label"  style="padding:0px;margin:0px;" for="textinput">Password:</label>  
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			  </div>

			   <button  id="signin_btn"type="submit" class="btn btn-primary"><p>Sign up</p></button>
			   <input type="hidden" name="_token" value="{{Session::token() }}"></input>
		</form>

	</div>
</body>
</html>