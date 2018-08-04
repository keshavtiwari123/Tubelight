var scroll = $(document).scrollTop();
var prev_scroll = 0
var ball_down = -1;
var left = $(window).width() - 50;
var left_original = $(window).width() - 50;
var ratio = 1;
var deg = 0;
$('#ball').css('background-color', 'rgba(0, 0, 0, 1)')
$(document).ready(function(){
	$(document).scroll(function(){
		var speed_factor = 1;
		scroll = $(document).scrollTop();
		if(scroll > 1800)
		{		
			speed_factor = (scroll - prev_scroll)/2;
			if(speed_factor < 0){speed_factor*=-1}
			if(scroll > prev_scroll)
			{
				if(ball_down == -1){	move_left(speed_factor);	}
				else{	move_right(speed_factor);	}				
			}
			else{
				if(ball_down == -1){	move_right(speed_factor);	}
				else{	move_left(speed_factor);	}
			}
		}
		prev_scroll = scroll;
	});
});

var x = $('#ball').position().top;
function move_left(speed)
{	
	left-=5*speed;
	ratio = (left/left_original)*100*ball_down;
	
	if(left>0)
	{	
		$('#ball').css('left', left).css('margin-top', ratio);
		rotate();
	}
	else{
		left = 0;
		$('#ball').css('left', 0).css('margin-top', ratio);
		ball_down = ball_down*-1;
		x = x + 300*ball_down;
		bcolor = 255*ball_down;
		color = -bcolor;
		$('#ball').css('top', x).css('background-color', 'rgba('+bcolor+', '+bcolor+', '+bcolor+', 1)').css('color', 'rgb('+color+', '+color+', '+color+')');
	}
}
function move_right(speed)
{
	left+=5*speed;
	ratio = (left/left_original)*100*ball_down;
	
	if(left < left_original)
	{
		$('#ball').css('left', left).css('margin-top', ratio);
		rotate();
	}
	else
	{
		left = left_original;
		$('#ball').css('left', left).css('margin-top', ratio);

	}
}

function rotate()
{
	var deg = left/0.43639;
	$('#ball').css('transform', 'rotateZ('+deg+'deg)');
}