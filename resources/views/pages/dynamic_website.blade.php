@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<div id="website">DYNAMIC WEBSITE</div>
	<p id="about_website">A dynamic website changes with different user. The change may be admin driven or some other factor like type of user or location of user etc. may also bring change. This means website will not be same every time for every user.</p>
	<div id="wiki"></div>
	<div id="image"><img src="{{URL::asset('storage/dynamic.png')}}" id="stati-image"></div>
	<div id="we-deliver">&#8594; We deliver you a maximun 5 page dynamic website. It will be a very responsive website comapatable to various screen sizes.<br>&#8594; For every extra page (i.e., more than 5) INR 500 will be charged<br>&#8594; Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br>&#8594; After 3 redesines or after 1 year INR 1000 are payable for each redesign.<br>&#8594; We will not be hosting your website and if you want us to host the website extra fees will be payable.<br>&#8594; For more information write us at logo@gmail.com or call +91-7052613187.</div>
	<div id="space"></div>
	<div id="price">PRICE &#8594; 5000 INR</div>
@endsection