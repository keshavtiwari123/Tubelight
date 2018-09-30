$(window).resize(function(){
    var x = $(window).width();
    
});
var cross = 0;
var arrow = 1;
            $(document).ready(function(){
                var last_scroll = $(document).scrollTop();
                $(document).scroll(function(){
                    scroll = $(document).scrollTop();
                    var x = scroll - last_scroll;
                    if(x > 0)
                    {
                        $('#header').css('transform', 'translateY(-110%)');
                    }
                    else
                    {
                        $('#header').css('transform', 'translateY(0px)');
                    }
                    last_scroll = scroll;
                });

                height = $(document).height();
                $('#footer').css('top', height);
                $('#three-lines').click(function(){
                    if(cross == 1){
                        $('#line-1').css('animation', 'line1 1s forwards');
                        $('#line-2').css('animation', 'line2 1s forwards');
                        $('#line-3').css('animation', 'line3 1s forwards');
                        $('#sidebar').css('animation', 'slide-out 1s forwards');
                        cross = 0;
                    }
                    else{
                        $('#line-1').css('animation', 'lineback1 1s forwards');
                        $('#line-2').css('animation', 'lineback2 1s forwards');
                        $('#line-3').css('animation', 'lineback3 1s forwards');
                        $('#sidebar').css('animation', 'slide-in 1s forwards');
                        cross = 1;
                    }
                    if(arrow == 0)
                    {
                        arrow = 1;
                        $('#drop-lines-mobile').css('animation', 'arrow_up 1s forwards');
                        $('#nav-drop-mobile').css('animation', 'slide-up 1s forwards');
                        $('.services').css('animation', 'navbar-hide .5s forwards');
                        $('.marketing').css('animation', 'navbar-hide .5s forwards');
                    }
                });
                $("#nav-services").click(function(){
                    $('.services').css('animation', 'navbar-show .5s forwards');
                    $('.marketing').css('animation', 'navbar-hide .5s forwards');
                    $(this).css('color', 'black');
                    $("#nav-marketing").css('color', 'white')

                });
                $("#nav-marketing").click(function(){
                    $('.marketing').css('animation', 'navbar-show .5s forwards');
                    $('.services').css('animation', 'navbar-hide .5s forwards');
                    $(this).css('color', 'black');
                    $("#nav-services").css('color', 'white')
                });
                $("#footer, #sidebar, #enquiry, #message, #container").click(function(){
                    $('.services').css('animation', 'navbar-hide .5s forwards');
                    $('.marketing').css('animation', 'navbar-hide .5s forwards');
                    $("#nav-services").css('color', 'white');
                    $("#nav-marketing").css('color', 'white');
                    if(arrow == 0)
                    {
                        arrow = 1;
                        $('#drop-lines-mobile').css('animation', 'arrow_up 1s forwards');
                        $('#nav-drop-mobile').css('animation', 'slide-up 1s forwards');
                    }
                    if(cross == 1){
                        $('#line-1').css('animation', 'line1 1s forwards');
                        $('#line-2').css('animation', 'line2 1s forwards');
                        $('#line-3').css('animation', 'line3 1s forwards');
                        $('#sidebar').css('animation', 'slide-out 1s forwards');
                        cross = 0;
                    }
                });

                $('#drop-lines-mobile').click(function(){
                    $('.services').css('animation', 'navbar-hide .5s forwards');
                    $('.marketing').css('animation', 'navbar-hide .5s forwards');
                    
                    if(arrow == 1)
                    {
                        $('#drop-lines-mobile').css('animation', 'arrow_down 1s forwards');
                        $('#nav-drop-mobile').css('animation', 'slide-down 1s forwards');
                        arrow = 0;
                    }
                    else
                    {
                        arrow = 1;
                        $('#drop-lines-mobile').css('animation', 'arrow_up 1s forwards');
                        $('#nav-drop-mobile').css('animation', 'slide-up 1s forwards');
                    }

                    if(cross == 1){
                        $('#line-1').css('animation', 'line1 1s forwards');
                        $('#line-2').css('animation', 'line2 1s forwards');
                        $('#line-3').css('animation', 'line3 1s forwards');
                        $('#sidebar').css('animation', 'slide-out 1s forwards');
                        cross = 0;
                    } 
                });
            });


            setInterval(function(){
            var x = ((Math.random()*1000)%10)*12;
            var y = ((Math.random()*1000)%10)*12;
            var w = Math.random()*2;
            var q =  y - x;
            var z = Math.sign(q);
            x = x*z;
            y = y*z;
            $("#message, #enquiry").css("transform", 'translateX('+ x +'px) translateY(' + y + 'px) rotateZ('+x + 'deg) rotateX('+y+'deg) rotateY('+x+'deg) scale('+w+')');
        }, 900);

$("#nav-drop-tablet").hide();
$("#right-lines").click(function(){
    $("#nav-drop-tablet").show(300);
});
$("#cross-sign").click(function(){
    $("#nav-drop-tablet").hide(300);
});