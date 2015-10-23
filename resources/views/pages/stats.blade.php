@extends('landing_page')

@section('nav')
<h2 style="margin: 0px; padding: 5px; display: inline-block; text-align: center; color: #484848;padding: 15px;">CTrak</h2>
		<ul>
			<li><a href="{{ route('stats') }}">Your Stats</a></li>
			<li><a href="{{ route('newinnings') }}">New Innings</a></li>
			<li><a href="{{ route('landingpage') }}">Log out</a></li>
		</ul>
@stop

@section('content')
<div stlye="width: 60%; height: 50px; margin: auto; display: block; border: 1px solid black">

<h1 style="display: inline-block;" >Stats</h1>
</div>


@stop