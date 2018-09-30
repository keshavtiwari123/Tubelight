<!doctype html>
@extends('welcome')
@if(!$mobile)
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/content.css')}}">
@else
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/mobile_content.css')}}">
@endif
@section('content')
	<div id="info-1">
	 <div id="logo-icon-home">
	 	<ul>
			<li>T</li><li>U</li><li>B</li><li>E</li><li>L</li><li>I</li><li>G</li><li>H</li><li>T</li>
		</ul>
	 </div>
	 <div id="wdd-icon-home">WEB &nbsp;  DESIGN  &nbsp; AND  &nbsp; DEVELOPMENT &nbsp; COMPANY</div>
	</div>
	 <div id="info-container-inside">
	 	<div id="info-container">YOU LOOK BETTER ONLINE</div>
	 	<div id="info-container-more">A great website is necessary for a brand and its growth. You need to grow online in order to mark your active presence in the market and we are here to help you with that. We understand your needs and we are happy to provide the best service that you can get<br><br>With our perfect designing you won`t look good you look GREATTT!!!</div>
	</div>

	
	<div id="behind-image-1-div">
		<div id="behind-image-1-info">"WITH GREAT POWER COMES GREAT RESPONSIBILITY"</div><div id="uncle-ben">-BEN PARKER</div>
		<div id="behind-image-1-info-2"><mark>We have the power of design And</mark> its our responsibility to deliver <mark>you a great website</mark></div>
		@if($mobile)
		<img src="{{URL::asset('storage/mobile_background.jpg')}}" id="behind-image-1">
		@else
		<img src="{{URL::asset('storage/dow.jpg')}}" id="behind-image-1">
		@endif
	</div>
	
	<div id="info-2">
		<div id="info-2_1">
			<div id="why">WHY US?</div>
			<div id="because">We are the best at what we do. We are genuine people with great passion to deliver  the best for you.<br><br>We provide a comprehensive web design, mobile web design eCommerce website design and development solution that fulfills your need of a cool website.<br><br>We work for your satisfaction and We`ve got your back</div>
			</div>
			
			<div id="info-2_2">
				<div id="what-we-do">WHAT WE DO?</div>
				<div id="we-do-this">&#8594; We design Websites and Develop web-Applications for your Brand.<br>&#8594; Responsive Web Design for real time experience.<br>&#8594; Web Redesign to look modern and more<br>&#8594; eCommerce Website design and development for your Business.<br>&#8594; Mobile web design<br>&#8594; You ask it and we have got it!</div>
			</div>
	</div>
	
			<div id="info-3">
				<div id="info-3-info">Most commonly ordered by our customres.</div>
				<div id="stati" class="type">
					<img src="{{URL::asset('storage/static.png')}}" id="stati-image">
					<span>STATIC</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				<div id="dynami" class="type">
					<img src="{{URL::asset('storage/dynamic.png')}}" id="stati-image">
					<span>DYNAMIC</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				<div id="ecommerce" class="type">
					<img src="{{URL::asset('storage/e-commerce.png')}}" id="stati-image">
					<span>ECOMMERCE</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				<div id="hotel-booking" class="type">
					<img src="{{URL::asset('storage/hotel.png')}}" id="stati-image">
					<span>HOTEL BOOKING</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				<div id="tour-and-travel" class="type">
					<img src="{{URL::asset('storage/tour.png')}}" >
					<span>TOUR AND TRAVEL</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				<div id="real-estate" class="type">
					<img src="{{URL::asset('storage/real-estate.png')}}" id="stati-image">
					<span>REAL ESTATE</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				<div id="school-management" class="type">
					<img src="{{URL::asset('storage/school.png')}}" id="stati-image">
					<span>School/College Website and management system</span>
					@if($mobile)<div id=space></div>@endif
				</div>
				
			</div>
			

			<div id="info-4">
				<div id="form-1">
					<form action="#" method="POST">
						<input type="text" name="name" id="name" placeholder="NAME">
						<input type="email" name="email" id="email" placeholder="E-MAIL">
						<textarea rows="8" cols="40" id="msg" placeholder="MESSAGE"></textarea>
						<button type="submit" value="SEND" id="send">SEND</button>
					</form>
				</div>
				<div id="info-4-data">GOT A NEW PROJECT WRITE US ABOUT IT, LETS SEE WHAT WE CAN DO.<br><br>Or IF YOU WANT TO TALK, FEEL FREE TO CALL OR WHATSAPP ON<br> +91-7052613187</div>
			</div>
			<div id='space-to-footer'></div>
	@if(!$mobile)	<div id="ball">:)</div>	@endif

@endsection


@section('javascript')
	@if(!$mobile)
	<script type="text/javascript">
		$(document).ready(function () {
			var scroll = $(document).scrollTop();
			$('#behind-image-1').css('top',  scroll*.6);
			$(document).scroll(function(){
				scroll = $(document).scrollTop();
				$('#behind-image-1').css('top',  scroll*.6);
			});
		});
	</script>
	@endif
	@if(!$mobile)
		<script type="text/javascript" src="{{URL::asset('js/ball_movement.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('js/image-animate.js')}}"></script>
		<script type="text/javascript">
			$(".type").tilt({
				scale: 0.8,
				reset: false,
			});
		</script>
	@endif
@endsection