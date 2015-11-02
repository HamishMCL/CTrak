@if(Session::has('failed'))
<div class="failed_alert">
	<p style="color: black;">Could not sign you in with those details.</p>
</div>
@endif