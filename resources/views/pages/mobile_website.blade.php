@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<style type="text/css">
	#we-deliver{
		margin-top: 200px;
	}
	#price{
		font-size: 16px;
	}
</style>
<div id="website">MOBILE WEBSITE</div>
	<p id="about_website">A Mobile website is concentrated only for mobile devices, but it also works on other devices. There are all types of mobile websites like static, dynamic etc. Now a days there are more mobile devices than computers so it is okay to have a website which is more concentrated on mobile devices</p>

	<div id="image"><img src="{{URL::asset('storage/mobile.jpg')}}" id="stati-image"></div>
	<div id="we-deliver">&#8594; The no. of pages you get depends on the package you choose<br>&#8594; For every extra page INR 500 will be charged<br>&#8594; Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br>&#8594; After 3 redesines or after 1 year INR 1000 are payable for each redesign.<br>&#8594; We will not be hosting your website and if you want us to host the website extra fees will be payable.<br>&#8594; For more information write us at logo@gmail.com or call +91-7052613187.</div>
	<div id="space"></div>
	<div id="price">PRICE<br>&nbsp; &#8594; INR 2000 for Static<br>&nbsp;&nbsp;&nbsp;&#8594; INR 5000 for Dynamic<br>&nbsp;&nbsp;&nbsp;&#8594; INR 15000 for Web Application</div>
@endsection