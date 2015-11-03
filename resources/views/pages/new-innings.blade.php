@extends('landing_page')
@section('nav')
	<h2 style="margin: 0px; padding: 5px; display: inline-block; text-align: center; color: #484848;padding: 15px;">CTrakr</h2>
		<ul>
			<li><a href="{{ route('stats') }}">Your stats</a></li>
			<li><a href="{{ route('new-innings') }}">New Innings</a></li>
			<li><a href="{{ route('landingpage') }}">Log out</a></li>
		</ul>
@stop
@section('content')
<div class="stats-container">
	<h1 style="margin-left: 15px;">New Innings</h1>


		<form class="form-horizontal"  role="form" method="POST" action="{{ route('new-innings') }}" style=" margin-left: 15px;width: 15%;">

			
				<h3 style="text-decoration: underline; ">Batting</h3>
			 	<h4>Runs</h4>   
			  	<input id="textinput" style="padding:0px;margin:0px;" name="runs" type="number" class="form-control input-md">
			
			 
			 	<h4>6's</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="sixes" type="text" class="form-control input-md">
			
			     
			 	 <h4>4's</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="fours" type="text" class="form-control input-md">
			
			  	 <h4>Out</h4> 
			  	<div class="radio">
					  <label><input type="radio" name="outs" value="1">Yes</label>
				</div>
				<div class="radio">
					  <label><input type="radio" name="optradio">No</label>
				</div>

	



				<h3 style="text-decoration: underline;;">Bowling</h3>
				 	<h4>Wickets</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="wickets" type="text" class="form-control input-md">
			  	 	<h4>Runs conceded</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="runs_conceded" type="text" class="form-control input-md">
			  	 	<h4>Overs</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="overs" type="text" class="form-control input-md">
			  	 	<h4>Maidens</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="maidens" type="text" class="form-control input-md">

			  	<h3 style="text-decoration: underline;">Feilding</h3>
			  	  	 	<h4>Catches</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="catches" type="text" class="form-control input-md">
			  	  	 	<h4>Run outs</h4> 
			  	<input id="textinput" style="padding:0px;margin:0px;" name="run_outs" type="text" class="form-control input-md">


			   <button  id="signin_btn"type="submit"  style="margin-top: 5px; width: 260px;"class="btn btn-primary"><p>Submit</p></button>
			   <input type="hidden" name="_token" value="{{Session::token() }}"></input>
		</form>
</div>
@stop