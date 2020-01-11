@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" id="flash_message">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function(){
        $('.alert-block').hide(2000);
    }, 2000);
    console.log("Message Arrive");
</script>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block" id="flash_message">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function(){
        $('.alert-block').hide(2000);
    }, 2000);
    console.log("Message Arrive");
</script>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block" id="flash_message">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block" id="flash_message">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function(){
        $('.alert-block').hide(2000);
    }, 2000);
    console.log("Message Arrive");
</script>
@endif


@if ($errors->any())
<div class="alert alert-danger" id="flash_message">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
<script>
    setTimeout(function(){
        $('.alert-block').hide(2000);
    }, 2000);
    console.log("Message Arrive");
</script>
@endif
