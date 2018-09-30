@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
	<style type="text/css">
		#price-mobile{
			font-size: 20px;
			margin-top: -20px;
		}
	</style>
@section('content')
<div id='content-1'>
<div id="website">MOBILE WEBSITE</div>
	<p id="about_website">A Mobile website is concentrated only for mobile devices, but it also works on other devices. There are all types of mobile websites like static, dynamic etc. Now a days there are more mobile devices than computers so it is okay to have a website which is more concentrated on mobile devices</p>
</div>
	<div id="image"><img src="{{URL::asset('storage/mobile.jpg')}}" id="stati-image"></div>
<div id="we-provide-upper-layer">
<div id="we-provide">
	<div id="what">WHAT WE PROVIDE</div>
	<div id="we-deliver">The no. of pages you get depends on the package you choose<br><br>For every extra page INR 500 will be charged<br><br>Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br><br>After 3 redesines or after 1 year INR 1000 are payable for each redesign.<br><br>We will not be hosting your website and if you want us to host the website extra fees will be payable.<br><br>For more information write us at logo@gmail.com or call +91-7052613187.</div>
	
	<div id="price">PRICE<br><div id="price-mobile">&nbsp;&nbsp;&nbsp;INR 2000 for Static&nbsp;&nbsp;&nbsp;INR 5000 for Dynamic&nbsp;&nbsp;&nbsp;INR 15000 for Web Application</div></div>
</div>
</div>
@endsection
@section('javascript')
	<script type="text/javascript" src="{{URL::asset('js/service-pages.js')}}"></script>
@endsection