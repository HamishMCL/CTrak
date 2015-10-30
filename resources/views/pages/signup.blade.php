@extends('landing_page')
	



@section('nav')
			
	<form role="form" method="POST" action="{{ route('signIn') }} " style="padding: 20px; margin: px;display: inline; float: right;">
		

				<input id="textinput" name="username" placeholder="USERNAME" type="text" class="form-control">
			
				 <input id="textinput" name="password"  placeholder="PASSWORD" type="password" class="form-control">
				 <button  id="signin_btn"type="submit" class="btn btn-primary" name="signIn">Sign in</button>
		

				<input type="hidden" name="_token" value="{{Session::token() }}"></input>
			</form>
@stop



@section('content')

		<h1 style="padding: 20px; margin: auto; text-align: center; font-size: 50px; color:  ; font-family: 'Open Sans', sans-serif;">West side mother fucker.</h1>
		<h1 style="padding: 20px; margin: auto; text-align: center; color: #35B0F2 ; font-family: 'Open Sans', sans-serif;">Sign Up</h1>

		<form class="form-horizontal"  role="form" method="POST" action="{{ route('signUp') }}" style=" margin: auto;display: block; width: 50%;text-align: center;">

			  <div class="form-group" style=" display: block;"> 
			 	 <label class="control-label"  style="padding:0px;margin:0px;" for="textinput" >Username:</label>  
			  	<input id="textinput" style="padding:0px;margin:0px;" name="username" type="text" value="{{ old('username')}}" class="form-control input-md">
			    	@if($errors->has('username')) <p style="color:red;">{{  $errors->first('username') }}</p> @endif
			  </div>

			   <div class="form-group" style=" display: block;"> 
			 	 <label class="control-label"  style="padding:0px;margin:0px;" for="textinput">Password:</label>  
			  	<input id="textinput" style="padding:0px;margin:0px;" name="password" type="password" class="form-control input-md">
			  	@if($errors->has('password')) <p style="color:red;">{{  $errors->first('password') }}</p> @endif
			  </div>

			   <button  id="signin_btn"type="submit" class="btn btn-primary" name="signUp"><p>Sign up</p></button>
			   <input type="hidden" name="_token" value="{{Session::token() }}"></input>
		</form>
@stop