<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <title>LOGO</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        @if(!$mobile)
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/home.css')}}">
        @else
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/home_mobile.css')}}">
        @endif
    </head>
    <body>
        <div id="header">
            <a href="{{route('home')}}"><div id="logo">
                <ul>
                    TUBELIGHT
                </ul>
            </div></a>
            <div id="wdd-head">WEB DESIGN AND DEVELOPMENT COMPANY</div>
            @if(!$mobile)
            <a href="{{route('home')}}"><div id="home-link">HOME</div></a>
            <div id='nav-services'>SERVICES</div>
            <div class="services">
                <a href="{{route('staticWebsite')}}"><div id="static-website-development">Static Website Development</div></a>
                <a href="{{route('dynamicWebsite')}}"><div id="dynmic-website-development">Dynamic Website Development</div></a>
                <a href="{{route('mobileWebsite')}}"><div id="mobile-web-development">Mobile Web Development</div></a>
                <a href="{{route('webAppWebsite')}}"><div id="web-app-development">Web Application Development</div></a>
            </div>
            <div id=nav-marketing>MARKETING</div>
            <div class="marketing">
                <div id="seo-nav">SEO</div>
                <div id="adsence">Google AdSence</div>
                <div id="social-media-marketing">Social Media Marketing</div>
            </div>
            <a href="{{route('ourWork')}}"><div id="our-work">OUR-WORK</div></a>
            <a href="{{route('prices')}}"><div id="prices">PRICES</div></a>
            <div id="blog">BLOG</div>
            @endif
        </div>
        @if($mobile)
            <div id="drop-lines-mobile"></div>
            <div id="nav-drop-mobile">
                <div id="nav-mobile-logo">
                    <ul>
                        <li>T</li><li>U</li><li>B</li><li>E</li><li>L</li><li>I</li><li>G</li><li>H</li><li>T</li>
                    </ul>
                </div>
                <div id="nav-mobile-wdd">WEB DESIGN AND DEVELOPMENT COMPANY</div>
                <div id='nav-services'>SERVICES</div>
                <div class="services" >
                    <a href="{{route('staticWebsite')}}"><div id="static-website-development">Static Website Development</div></a>
                    <a href="{{route('dynamicWebsite')}}"><div id="dynmic-website-development">Dynamic Website Development</div></a>
                    <a href="{{route('mobileWebsite')}}"><div id="mobile-web-development">Mobile Web Development</div></a>
                    <a href="{{route('webAppWebsite')}}"><div id="web-app-development">Web Application Development</div></a>
                </div>
                <div id=nav-marketing>MARKETING</div>
                <div class="marketing" >
                    <div id="seo-nav">SEO</div>
                    <div id="adsence">Google AdSence</div>
                    <div id="social-media-marketing">Social Media Marketing</div>
                </div>
                <a href="{{route('ourWork')}}"><div id="our-work">OUR-WORK</div></a>
                <a href="{{route('prices')}}"><div id="prices">PRICES</div></a>
                <div id="blog">BLOG</div>
            </div>
        @endif
        <div id="sidebar">
            <div id="contact">Contact</div>
            <div><i class="fa fa-facebook big fb-side"></i></div>
            <div><i class="fa fa-instagram big ins-side"></i></div>
            <div><i class="fa fa-google big goo-side"></i></div>
            <div><i class="fa fa-twitter big twi-side"></i></div>
            <a href="{{route('home')}}"><div id="home-side">HOME</div></a>
            <div id='about'>ABOUT</div>
            <a href="{{route('ourWork')}}"><div id="portfolio">OUR WORKS</div></a>
            <a href="{{route('prices')}}"><div id="services">SERVICES</div></a>
            <div id="marketing-side">MARKETING</div>
            <a href="{{route('prices')}}"><div id="price-side">PRICE</div></a>
            <div id="blog-side">BLOG</div>
            <div id="faqs-side">FAQS</div>
            <a href="{{route('home')}}"><div id="logo-side">
                <ul>
                    <li>T</li><li>U</li><li>B</li><li>E</li><li>L</li><li>I</li><li>G</li><li>H</li><li>T</li>
                </ul>
            </div></a>
            <div id="wdd-side">WEB DESIGN AND DEVELOPMENT COMPANY</div>
        </div>
        <div id="three-lines">
            <div id="line-1"></div>
            <div id="line-2"></div>
            <div id="line-3"></div>
        </div>
        <div id="container">
            
            @yield('content')

        </div>
        @if(!$mobile)
        <div id="enquiry">Quick Enquiry<br><i class="fa fa-question big"></i></div>
        <div id='message'>Chat With Us <i class="fa fa-envelope big"></i></div>
        @endif
        
        <div id="footer">
            <a href="{{route('home')}}"> <div id="logo-foot">
                <ul>
                    <li>T</li><li>U</li><li>B</li><li>E</li><li>L</li><li>I</li><li>G</li><li>H</li><li>T</li>
                </ul>
                <br><div id="wdd">WEB DESIGN AND DEVELOPMENT COMPANY</div></div></a>
            <div id="info-foot">
                WE ARE A WEB DEVELOPMENT COMPANY HAVING EXPERTISE IN WEB DESIGNING AND WEB APPLICATION DEVELOPMENT. WE WILL PROVIDE YOU THE BEST SOFTWARE USING THE BEST TECHNOLOGIES WHICH ARE CURRENTLY BEING USED IN THE MARKET.
            </div>
            <div id="contact-foot">Contact us on</div>
            <div><i class="fa fa-facebook big fb-foot"></i></div>
            <div><i class="fa fa-instagram big ins-foot"></i></div>
            <div><i class="fa fa-google big goo-foot"></i></div>
            <div><i class="fa fa-twitter big twi-foot"></i></div>
            <div id="policies">POLICIES</div>
            <div id="hr-policies"></div>
            <div id="terms">Terms of service</div>
            <div id="privacy">Privacy Policy</div>
            @if(!$mobile)
            <div id="quick-links">QUICK LINKS</div>
            <div id="hr-quick-links"></div>
            <div id="so-me-mar">Social Media Marketing</div>
            <div id="seo">SEO</div>
            <div id="static">Static Web Design</div>
            <div id="dynamic">Dynamic Web Design</div>
            <div id="mobile">Mobile Web Design</div>
            @endif
            <div id="copyright">&copy; COPYRIGHT TUBELIGHT 2017 | ALL RIGHTS RESERVED</div>
            <div id="address">ADDRESS</div>
            <div id="hr-address"></div>
            <div id="address-main">Engineering College Chauraha<br>Lucknow, Uttar Pradesh<br>India.</div>

        </div>
        <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/home.js')}}"></script>
        @yield('javascript')
        
    </body>
</html=''>
