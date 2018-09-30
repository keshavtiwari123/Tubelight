@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<div id='content-1'>
<div id="website">WEB APPLICATION</div>
	<p id="about_website">A web application is like an extremely dynamic website, serving the needs of your business and customers.It is most responsive and highly user interactive.These are mainly used for social media and all kinds of booking systems</p>
</div>
	<div id="image"><img src="{{URL::asset('storage/webapp.jpg')}}" id="stati-image"></div>
<div id="we-provide-upper-layer">
<div id="we-provide">
	<div id="what">WHAT WE PROVIDE</div>
	<div id="we-deliver">We deliver you a &#x221e;<small>(infinite)</small> page dynamic website. It will be a very responsive website comapatable to various screen sizes.<br><br>Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br><br>After 3 redesines or after 1 year INR 2000 are payable for each redesign.<br><br>We will not be hosting your website and if you want us to host the website extra fees will be payable.<br><br>For more information write us at logo@gmail.com or call +91-7052613187.</div>
	
	<div id="price">PRICE &#8594; 40,000 INR</div>
</div>
</div>
@endsection
@section('javascript')
	<script type="text/javascript" src="{{URL::asset('js/service-pages.js')}}"></script>
@endsection