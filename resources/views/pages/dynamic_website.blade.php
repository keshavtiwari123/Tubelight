@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<div id='content-1'>
<div id="website">DYNAMIC WEBSITE</div>
	<p id="about_website">A dynamic website changes with different user. The change may be admin driven or some other factor like type of user or location of user etc. may also bring change. This means website will not be same every time for every user.</p>
</div>
<div id="image">
	<img src="{{URL::asset('storage/dynamic.png')}}" id="stati-image">
</div>
<div id="we-provide-upper-layer">
<div id="we-provide">
	<div id="what">WHAT WE PROVIDE</div>
	<div id="we-deliver"> We deliver you a maximun 5 page dynamic website. It will be a very responsive website comapatable to various screen sizes.<br><br>For every extra page (i.e., more than 5) INR 500 will be charged<br><br> Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br><br>After 3 redesines or after 1 year INR 1000 are payable for each redesign.<br><br>We will not be hosting your website and if you want us to host the website extra fees will be payable.<br><br>For more information write us at logo@gmail.com or call +91-7052613187.</div>
	<div id="price">PRICE 5000 INR</div>
</div>
</div>
@endsection
@section('javascript')
	<script type="text/javascript" src="{{URL::asset('js/service-pages.js')}}"></script>
@endsection