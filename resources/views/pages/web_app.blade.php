@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<div id="website">WEB APPLICATION</div>
	<p id="about_website">A web application is like an extremely dynamic website, serving the needs of your business and customers.It is most responsive and highly user interactive.These are mainly used for social media and all kinds of booking systems</p>

	<div id="image"><img src="{{URL::asset('storage/webapp.jpg')}}" id="stati-image"></div>
	<div id="we-deliver">&#8594; We deliver you a &#x221e;<small>(infinite)</small> page dynamic website. It will be a very responsive website comapatable to various screen sizes.<br>&#8594; Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br>&#8594; After 3 redesines or after 1 year INR 2000 are payable for each redesign.<br>&#8594; We will not be hosting your website and if you want us to host the website extra fees will be payable.<br>&#8594; For more information write us at logo@gmail.com or call +91-7052613187.</div>
	<div id="space"></div>
	<div id="price">PRICE &#8594; 40,000 INR</div>
@endsection