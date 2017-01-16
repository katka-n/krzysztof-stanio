<!DOCTYPE html>
<html lang="en">
<head>
<title>courses</title>
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
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
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
                    <li class="active"><a href="{{URL::to('courses') }}">courses</a></li>
                    <li><a href="{{URL::to('contact') }}">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="global indent">
    <!--content-->
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 thumb-box5">
            <h2 class="center indent">Undergraduate<br>Courses</h2>
            <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="list1-1">
                        <li><a href="#">Accounting & Finance (14)</a></li>
                        <li><a href="#">Archaeology & Heritage (9)</a></li>
                        <li><a href="#">Biological Sciences (11)</a></li>
                        <li><a href="#">Computer Animation (12)</a></li>
                        <li><a href="#">Corporate & Marketing </a></li>
                        <li><a href="#">Communication (9)</a></li>
                        <li><a href="#">Creative Technology (18)</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="list1-1">
                        <li><a href="#">Exercise Science (3)</a></li>
                        <li><a href="#">Geography & Environmental Science (7)</a></li>
                        <li><a href="#">Journalism (7)</a></li>
                        <li><a href="#">Marketing (10)</a></li>
                        <li><a href="#">Midwifery (1)</a></li>
                        <li><a href="#">Music (6)</a></li>
                        <li><a href="#">Nutrition (2)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 thumb-box5">
            <h2 class="center indent">short courses & professional<br>development</h2>
            <p class="center">Donec consectetur ultrices erat, a fermentum nisi blandit quis. Mauris sagittis mi eros, id fermentum felis accumsan at.</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="list1-1">
                        <li><a href="#">Computer Animation (8)</a></li>
                        <li><a href="#">Engineering & Manufacturing (14)</a></li>
                        <li><a href="#">Forensic Science (6)</a></li>
                        <li><a href="#">Health (5)</a></li>
                        <li><a href="#">Law (5)</a></li>
                        <li><a href="#">Marine & Coastal (8)</a></li>
                        <li><a href="#">Media (25)</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="list1-1">
                        <li><a href="#">Retail (2)</a></li>
                        <li><a href="#">Design & Technology (18)</a></li>
                        <li><a href="#">Environmental (12)</a></li>
                        <li><a href="#">Government/Public Sector (16)</a></li>
                        <li><a href="#">IT and Computing (9)</a></li>
                        <li><a href="#">Management & Leadership (20)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box6 center">
        <div class="container">     
            <div class="col-lg-6 col-md-6 col-sm-6 box">
                <h2 class="center indent">postgraduate<br>courses</h2>
                <p class="center">Cras id justo euismod, congue eros in, pretium massa. Quisque id sodales liberoin semper malesuada, nulla sapien pellentesque nulla, id ferm</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li><a href="#">Advertising, Marketing and PR (13)</a></li>
                            <li><a href="#">Computing (13)</a></li>
                            <li><a href="#">Forensic Science (6)</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li><a href="#">Journalism (8)</a></li>
                            <li><a href="#">Media Production (17)</a></li>
                            <li><a href="#">Social Care (8)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 box">
                <h2 class="center indent">health & social care<br>professionals</h2>
                <p class="center">Quisque id sodales libero. Quisque ornare, tellus in semper malesuada, nulla sapien pellentesque nulla, id fermen.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li><a href="#">Education - Practice Education (2)</a></li>
                            <li><a href="#">Maternity - Care of the Newborn (2)</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li><a href="#">Practice & Professional</a></li>
                            <li><a href="#">Development (15)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="thumb-box7 center">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>How Our Courses Work</h3>
                    <h4>hendrerit sed pharetra eu</h4>
                    <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget fringilla nisl nulla porta urna. </p>
                    <a href="#" class="btn-default btn1">Read More</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Types of Courses</h3>
                    <h4>Nullam id elit accumsan</h4>
                    <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget fringilla nisl nulla porta urna. </p>
                    <a href="#" class="btn-default btn1">Read More</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Diploma Requirements</h3>
                    <h4>accumsan lorem adipis</h4>
                    <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget fringilla nisl nulla porta urna. </p>
                    <a href="#" class="btn-default btn1">Read More</a>
                </div>
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