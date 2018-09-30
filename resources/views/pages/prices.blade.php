@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/prices_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/price.css')}}">
	@endif
@section('content')
	<div id="prices-prices">PRICES</div>
	<div id="lists">

	<a href="{{route('staticWebsite')}}" >
	<div id="stati-prices" class="box">
			<div class="bx-in">
			<div id="head">Static Website</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  1<br>
				Resposive: &#x2713;   <br>
				Interactive: &#x2718; <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2718;<br>
				<div id="prc-prc">Price: Rs 2,000.</div>
			</div>
		</div>
	</div>
	</a>

	<a href="{{route('dynamicWebsite')}}" >
	<div id="dynami-prices" class="box">
		<div class="bx-in">
			<div id="head">Dynamic Website</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  5<br>
				Resposive: &#x2713;   <br>
				Interactive: medium <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2713;<br>
				<div id="prc-prc">Price: Rs 5,000.</div>
			</div>
		</div>
	</div>
	</a>
	<a href="{{route('webAppWebsite')}}">
	<div id="web-app-prices" class="box">
		<div class="bx-in">
			<div id="head">Web Application</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  &#x221e;<br>
				Resposive: &#x2713;   <br>
				Interactive: &#x2713; <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2713;<br>
				<div id="prc-prc">Price: Rs 40,000.</div>
			</div>
		</div>
	</div>
	</a>
	
	<a href="{{route('mobileWebsite')}}">
	<div id="mobile-prices" class="box">
		<div class="bx-in">
			<div id="head">Mobile Website</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  1 - &#x221e;<br>
				Resposive: &#x2713;   <br>
				Interactive: &#x2713; <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2713;<br>
				<div id="prc-prc">Price: Rs 2,000 - 40,000.<br><small style="color: grey; font-size: 14px">(depends on what type of website you want)</small></div>
			</div>
		</div>
	</div>
	</a>
	
</div>
	<div id="space"></div>
@endsection
@section('javascript')
<script type="text/javascript" src="{{URL::asset('js/image-animate.js')}}"></script>
<script type="text/javascript">
	$(".box").tilt({
		scale: 0.8,
		glare: true,
		reset: false,
	});
</script>
@endsection