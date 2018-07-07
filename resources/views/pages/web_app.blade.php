@extends('welcome')
	<style type="text/css">
		#about_dynamic{
			color: grey;
			width: 40%;
			font-size: 20px;
			position: absolute;
			top: 15%;
			left: 50%;
		}
		
		#static-website{
			color: salmon;
			font-size: 35px;
			position: absolute;
			top: 20%;
			left: 20%;
		}
		#image{
			margin-top: 30%;
			margin-left: 10%;
			overflow: hidden;
			width: 90%;
			height: 500px;
		}
		#image:hover img{
			animation: zoom 1s forwards;
		}
		#we-deliver{
			position: absolute;
			margin-top: 10%;
			left: 10%;
			color: grey;
			width: 50%;
			padding: 2%;
			font-size: 25px;
			height: 500px;
			box-shadow: 5px 5px 8px grey;
			border-radius: 10px;
		}
		#price{
		position: absolute;
			margin-top: 6%;
			left: 10%;
			color: black;
			font-size: 30px;	
		}
		#space{
			position: absolute;
			margin-top: 70%;
			min-height: 100px;
			border: .1px solid black;
		}
	</style>
@section('content')
<div id="static-website">WEB APPLICATION</div>
	<p id="about_dynamic">A web application is like an extremely dynamic website, serving the needs of your business and customers.It is most responsive and highly user interactive.These are mainly used for social media and all kinds of booking systems</p>

	<div id="image"><img src="{{URL::asset('storage/webapp.jpg')}}" id="stati-image"></div>
	<div id="we-deliver">&#8594; We deliver you a &#x221e;<small>(infinite)</small> page dynamic website. It will be a very responsive website comapatable to various screen sizes.<br>&#8594; Redesign will be applicable for 1 year with maximum of three redesines over the year and free of cost.<br>&#8594; After 3 redesines or after 1 year INR 2000 are payable for each redesign.<br>&#8594; We will not be hosting your website and if you want us to host the website extra fees will be payable.<br>&#8594; For more information write us at logo@gmail.com or call +91-7052613187.</div>
	<div id="space"></div>
	<div id="price">PRICE &#8594; 40,000 INR</div>
@endsection