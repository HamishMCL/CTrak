@extends('landing_page')

@section('nav')
<h2 style="margin: 0px; padding: 5px; display: inline-block; text-align: center; ;padding: 15px;">CTrak</h2>
		<ul>
			<li><a href="{{ route('stats') }}">Your Stats</a></li>
			<li><a href="{{ route('new-innings') }}">New Innings</a></li>
			<li><a href="{{ route('landingpage') }}">Log out</a></li>
		</ul>
@stop
 
@section('content')
	
<div class="stats-container">

<h1 >Stats</h1>
<hr >

<div class="stats">

	<div class="stat-heading-container">

		<h3 class="stat-heading">Batting</h3>

	</div>
	<div class="sections" >
		<h4 class="section-title">Runs</h4>

		<h4 class="section-info"> 0</h4>
	</div>

	<div class="sections">
		<h4 class="section-title">Outs</h4>

		<h4 class="section-info">0</h4>
	</div>

	<div class="sections">
		<h4 class="section-title">Innings</h4>

		<h4 class="section-info">0</h4>
	</div>

	<div class="sections">
		<h4 class="section-title">Average</h4>

		<h4 class="section-info ">0</h4>
	</div>
	<div class="sections">
		<h4 class="section-title">Highest Score</h4>

		<h4 class="section-info ">0</h4>
	</div>


</div>


<div class="stats">

	<div class="stat-heading-container">

		<h3 class="stat-heading">Bowling</h3>

	</div>

		<div class="sections" >
		<h4 class="section-title">Wickets</h4>

		<h4 class="section-info"> 0</h4>
	</div>

	<div class="sections">
		<h4 class="section-title">Overs</h4>

		<h4 class="section-info">0</h4>
	</div>

	<div class="sections">
		<h4 class="section-title">Runs Conceded</h4>

		<h4 class="section-info">0</h4>
	</div>

	<div class="sections">
		<h4 class="section-title">Maidens</h4>

		<h4 class="section-info ">0</h4>
	</div>
	<div class="sections">
		<h4 class="section-title">Innings</h4>

		<h4 class="section-info ">0</h4>
	</div>
	<div class="sections">
		<h4 class="section-title">Economy</h4>

		<h4 class="section-info ">0</h4>
	</div>
	<div class="sections">
		<h4 class="section-title">Best Figures</h4>

		<h4 class="section-info ">0</h4>
	</div>

</div>

<div class="stats">
	<div class="stat-heading-container">

		<h3 class="stat-heading">Feilding</h3>

	</div>
	<div class="sections">
		<h4 class="section-title">Catches</h4>

		<h4 class="section-info ">0</h4>
	</div>
	<div class="sections">
		<h4 class="section-title">Run outs</h4>

		<h4 class="section-info ">0</h4>
	</div>

</div>



</div>


@stop