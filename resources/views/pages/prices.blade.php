@extends('welcome')
	<style type="text/css">
		#prices-prices{
			position: absolute;
			top: 20%;
			left: 20%;
			font-size: 25px;
			color: salmon;
		}
		#lists{
			position: absolute;
			top: 30%;
			left: 2%;
			color: grey;
		}
		#lists div:hover{
			animation: zoom 20s forwards;
		}
		#head{
			font-size: 40px;
			text-align: center;
			color: salmon;
		}
		#stati-prices{
			height: 400px;
			width: 400px;
			border-radius: 5px;
			border: 1px solid grey;
			box-shadow: 4px 4px 8px grey;
		}
		#dynami-prices{
			height: 400px;
			width: 400px;
			margin-left: 430px;
			margin-top: -400px;
			border-radius: 5px;
			border: 1px solid grey;
			box-shadow: 4px 4px 8px grey;
		}
		#web-app-prices{
			height: 400px;
			width: 400px;
			margin-left: 860px;
			margin-top: -400px;
			border-radius: 5px;
			border: 1px solid grey;
			box-shadow: 4px 4px 8px grey;
		}
		#mobile-prices{
			height: 400px;
			width: 400px;
			border-radius: 5px;
			border: 1px solid grey;
			box-shadow: 4px 4px 8px grey;
			margin-top: 50px;
		}
		#info{
			position: relative;
			top:2%;
			width: 100%;
			text-align: center;
			font-size: 25px;
			color: salmon;
		}
		#answer{
			position: relative;
			top:15%;
			width: 100%;
			left: 10%;
			font-size: 25px;
			color: grey;
			
		}
		#prc-prc{
			margin-top: 10px;
			color: red;
			font-size: 30px
		}
		
	</style>
@section('content')
	<div id="prices-prices">PRICES</div>
	<div id="lists">
	<a href="{{route('staticWebsite')}}">
		<div id="stati-prices">
			<div id="head">Static Website</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  1<br>
				Resposive: &#x2713;   <br>
				Interactive: &#x2718; <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2718;<br>
				<div id="prc-prc">Price: Rs 2,000.</div>
			</div>
		</div>
	</a>
	<a href="{{route('dynamicWebsite')}}">
		<div id="dynami-prices">
			<div id="head">Dynamic Website</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  5<br>
				Resposive: &#x2713;   <br>
				Interactive: medium <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2713;<br>
				<div id="prc-prc">Price: Rs 5,000.</div>
			</div>
		</div>
	</a>
	<a href="{{route('webAppWebsite')}}">
		<div id="web-app-prices">
			<div id="head">Web Application</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  &#x221e;<br>
				Resposive: &#x2713;   <br>
				Interactive: &#x2713; <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2713;<br>
				<div id="prc-prc">Price: Rs 40,000.</div>
			</div>
		</div>
	</a>
	<a href="{{route('mobileWebsite')}}">
		<div id="mobile-prices"><div id="head">Mobile Website</div>
			<div id="info">What You Get</div>
			<div id="answer">
				Number of Html Pages:  1 - &#x221e;<br>
				Resposive: &#x2713;   <br>
				Interactive: &#x2713; <br>
				Redesign:  max 3 over the year<br>
				Dynamic: &#x2713;<br>
				<div id="prc-prc">Price: Rs 2,000 - 40,000.<br><small style="color: grey; font-size: 14px">(depends on what type of website you want)</small></div>
			</div>
	</div>
	</a>
	<div id="space"></div>
@endsection