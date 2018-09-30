@extends('welcome')
	@if($mobile)
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website_mobile.css')}}">
	@else
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/website.css')}}">
	@endif
@section('content')
<div id='content-1'>
	<div id="website">STATIC WEBSITE</div>
	<p id="about_website">A static webpage is a webpage that is delivered to the user exacty as stored. Consequently a static web page displays the same information to all users from all contexts, subject to modern capability of a web server to negotiate content type or language of the document where such versions are available and the server is configured to do so.</p>
</div>
	<div id="image">
		<img src="{{URL::asset('storage/static.png')}}" id="stati-image">
	</div>
<div id="we-provide-upper-layer">
<div id="we-provide">
	<div id="what">WHAT WE PROVIDE</div>
	<div id="we-deliver"> We deliver you a 1 page website with all the information you need to be in it. It will be a very responsive website comapatable to various screen sizes.<br><br> Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br><br>If you want any Redesign(Change) in the website then after 3 redesines or after 1 year INR 1000 are payable for each redesign.<br><br> We will not be hosting your website and if you want us to host the website extra fees will be payable.<br><br> For more information write us at logo@gmail.com or call +91-7052613187.</div>
	
	<div id="price">PRICE 2000 INR /-</div>
</div>
</div>
@endsection
@section('javascript')
	<script type="text/javascript" src="{{URL::asset('js/service-pages.js')}}"></script>
@endsection