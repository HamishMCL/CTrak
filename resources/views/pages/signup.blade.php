@extends('landing_page')


@section('content')

		<h1 style="padding: 20px; margin: auto; text-align: center; font-size: 50px; color:  ; font-family: 'Open Sans', sans-serif;">CTrakR</h1>
		<h1 style="padding: 20px; margin: auto; text-align: center; color: #35B0F2 ; font-family: 'Open Sans', sans-serif;">Sign Up</h1>

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
@stop