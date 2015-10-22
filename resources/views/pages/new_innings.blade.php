@extends('dashboard')

@section('content')

	<h1 style="margin-left: 15px;">New Innings</h1>


		<form class="form-horizontal"  role="form" method="POST" action="{{ route('landingpage') }}" style=" margin-left: 15px;width: 15%;">

			
				<h3 style="text-decoration: underline; color: blue;">Batting</h3>
			 	<h4>Runs</h4>   
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			

			 
			 	<h4>6's</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			
			     
			 	 <h4>4's</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			
			  	 <h4>Out</h4> 
			  	<div class="radio">
					  <label><input type="radio" name="optradio">Yes</label>
				</div>
				<div class="radio">
					  <label><input type="radio" name="optradio">No</label>
				</div>

				<h4>How out</h4>
				<div class="form-group">
			
				  <select style="margin-left: 15px;" class="form-control" id="sel1">
				    <option>Bowled</option>
				    <option>Caught</option>
				    <option>Lbw</option>
				    <option>Run out</option>
				    <option>Stumped</option>
				    <option>Hit wicket</option>
				    <option>Handled the ball</option>
				    <option>Obstructing the feild</option>
				    <option>Timed out</option>
				  </select>
				</div>



				<h3 style="text-decoration: underline; color: blue;">Bowling</h3>
				 	<h4>Wickets</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			  	 	<h4>Runs conceded</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			  	 	<h4>Overs</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			  	 	<h4>Maidens</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">

			  	<h3 style="text-decoration: underline; color: blue;">Feilding</h3>
			  	  	 	<h4>Catches</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">
			  	  	 	<h4>Run outs</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="textinput" type="text" class="form-control input-md">


			   <button  id="signin_btn"type="submit"  style="margin-top: 5px; width: 260px;"class="btn btn-primary"><p>Submit</p></button>
			   <input type="hidden" name="_token" value="{{Session::token() }}"></input>
		</form>
@stop