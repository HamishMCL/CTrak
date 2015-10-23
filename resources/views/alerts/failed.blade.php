@if(Session::has('failed'))
<div class="failed_alert">
	<p>Your attempt failed! Please try again.</p>
</div>
@endif