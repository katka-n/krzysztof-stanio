<!DOCTYPE html>
<html lang="en">
<head>
<title>404</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<!--[if lt IE 9]>
    <div style='text-align:center' class="qwerty"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
  <![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <link rel="stylesheet" href="css/ie.css">
  <![endif]-->
</head>
<body>
<!--header-->
<header class="clearfix indent"> 
    <div class="container">
        <div class="box clearfix"> 
            <h1 class="navbar-brand navbar-brand_"><a href="{{URL::to('/') }}"><img src="img/logo.png" alt="logo"></a></h1>
            <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                <ul class="nav sf-menu clearfix">
                    <li class="sub-menu"><a href="{{URL::to('/') }}">home</a><span></span>
                        <ul class="submenu">
            				<li><a href="#">About</a><span></span>
                              <ul class="submenu">
                                    <li><a href="#">Fresh</a></li>
                                    <li><a href="#">Archive</a></li>
                              </ul>  
                            </li>
            				<li><a href="#">History</a></li>
                            <li><a href="#">News</a></li>
            			</ul>
                    </li>
                    <li><a href="{{URL::to('about') }}">about</a></li>
                    <li><a href="{{URL::to('events') }}">events</a></li>
                    <li><a href="{{URL::to('courses') }}">courses</a></li>
                    <li><a href="{{URL::to('contact') }}">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--content-->
<div class="global indent">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-lg-offset-2 errorBox">
                <figure><img src="img/error.png" alt=""></figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 errorBox1">
                <h2>Sorry!<br>Page Not Found</h2>
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <p>Please try using our search box below to look for information on the website.</p>
                <form id="search-404" class="search" action="search.php" method="GET" accept-charset="utf-8">
                    <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
                    <a href="#" onClick="document.getElementById('search-404').submit()" class="btn-default btn1">submit</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <p>High School &copy; <em id="copyright-year"></em> <span>|</span> <a href="{{URL::to('privacy_policy') }}">Privacy policy</a></p>
        <p class="foo_address">28 jackson blvd ste 1020<br>chicago, il 60604-2340</p>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>