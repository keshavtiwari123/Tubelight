@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<div id="website">STATIC WEBSITE</div>
	<p id="about_website">A static webpage is a webpage that is delivered to the user exacty as stored. Consequently a static web page displays the same information to all users from all contexts, subject to modern capability of a web server to negotiate content type or language of the document where such versions are available and the server is configured to do so.</p>
	<div id="wiki">-Wikipedia</div>
	<div id="image"><img src="{{URL::asset('storage/static.png')}}" id="stati-image"></div>
	<div id="we-deliver">&#8594; We deliver you a 1 page website with all the information you need to be in it. It will be a very responsive website comapatable to various screen sizes.<br>&#8594; Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br>&#8594; After 3 redesines or after 1 year INR 1000 are payable for each redesign.<br>&#8594; We will not be hosting your website and if you want us to host the website extra fees will be payable.<br>&#8594; For more information write us at logo@gmail.com or call +91-7052613187.</div>
	<div id="space"></div>
	<div id="price">PRICE &#8594; 2000 INR</div>
@endsection
