$(document).ready(function(){
	var width = $('#stati-image').innerWidth();
	var left = ($(window).width() - width)/2;
	if(left>0)
	{
		$("#stati-image").css('margin-left', left+'px');
	}
	else{
		$("#stati-image").css('width', width+'px');
	}
	

	$(window).resize(function(){
		left = ($(window).innerWidth() - width)/2;
		
		if(left>0)
		{
			$("#stati-image").css('margin-left', left+'px');
		}
		else{
			$("#stati-image").css('width', width+'px');
		}

		
	});
});
