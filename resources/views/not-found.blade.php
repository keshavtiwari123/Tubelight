@extends('welcome')
	<style type="text/css">
		#question{
			position: absolute;
			top: 10%;
			left: 40%;
			font-size: 500px;
			margin-top: -50px;
			margin-left: -50px;
			z-index: 4;
			opacity: .1;
		}

		#not-found{
			position: relative;
			top: 30%;
			left: 20%;
			font-size: 100px;
			transition: transform 1s;
			opacity: .8;
			color: #3bbcde;
		}
		
		#inside-it{
			position: absolute;
			top: 10%;
			left: 10%;
			width: 80%;
			height: 80%;
			overflow: hidden;
			background-color: black;
			border-radius: 5px;
			box-shadow: 10px 10px 10px grey;
		}
		.dot{
					position: absolute;
					top: 5%;
					left: 5%;
					
				}
	</style>
@section('content')
	<div id="question">?</div>
	<div id="inside-it">
		<div id="not-found">404: NOT FOUND</div>
		<div id="ax"></div>	
	</div>
	
@endsection
@section('javascript')
	<script type="text/javascript">
		$(document).ready(function(){
			dots(200);
			setInterval(function(){
				change_color("#not-found");
			}, 100);
		});
		setInterval(function(){
			var x = ((Math.random()*1000)%10)*12;
			var y = ((Math.random()*1000)%10)*12;
			var w = Math.random()*2;
			var q =  y - x;
			var z = Math.sign(q);
			x = x*z;
			y = y*z;
			$("#not-found").css("transform", 'translateX('+ x +'px) translateY(' + y + 'px) rotateZ('+x + 'deg) rotateX('+y+'deg) rotateY('+x+'deg) scale('+w+')');
		}, 900);

		function move(name)
			{
				var width = $(window).width();
				var height = $(window).height();
				setInterval(function(){
					var x = (Math.random()*width*.9);
					var y = (Math.random()*height*.9);
					var w = Math.random();
					var time = Math.random()*2;

					$(name).css("transform", 'translateX('+ x +'px) translateY(' + y + 'px) scale('+w+')').css('transition', 'transform ' + time + 's ease-out').css("opacity", w);
					
					
				}, 1800);
			}
			function dots(no)
			{
				for(i=1; i<=no; i++)
				{
					$("#ax").prepend($('<div id="dot'+ i +'" class="dot">not_found</div>'));
				}
				for(i=1; i<=no; i++)
				{
					var name = "#dot" + i;
					move(name);
					change_color(name);
				}
			}
		function change_color(id)
		{
			
				var a = Math.random()*300;
				var c = Math.random()*300;
				var b = Math.random()*300;
				$(id).css('color', 'rgba('+a+', '+b+', '+c+')');
			
		}
	</script>
@endsection