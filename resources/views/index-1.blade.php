<!DOCTYPE html>
<html lang="en">
<head>
<title>ABOUT</title>
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
                    <li class="active"><a href="{{URL::to('about') }}">about</a></li>
                    <li><a href="{{URL::to('events') }}">events</a></li>
                    <li><a href="{{URL::to('courses') }}">courses</a></li>
                    <li><a href="{{URL::to('contact') }}">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="global indent">
    <!--content-->
    <div class="who-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h2 class="center indent">About Us</h2>
                    <div class="thumb-pad4">
                        <div class="thumbnail">
                            <figure><img src="img/page2_pic1.jpg" alt=""></figure>
                            <div class="caption">
                                <h4>sodales sit amet turpis eu tempus volut</h4>
                                <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget fringilla nisl nulla porta urna. Morbi eleifend imperdiet elementum. Nunc ornare iaculis lectus, nec mattis</p>
                                <p>mi faucibus venenatis. Pellentesque vulputate libero placerat urna pretium, sollicitudin iaculis mi tincidunt. Phasellus eu lectus erat. Aenean et lacus eu dolor rutrum euismod eget a purus. Maecenas vestibulum, est in adipiscing volutpat, orci ipsum porta augue, sed.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h2 class="center indent">Latest News</h2>
                    <ul class="list6">
                        <li class="clearfix">
                            <div class="badge">
                                22 <span>jun</span>
                                <strong>6 <img src="img/page2_icon1.png" alt=""></strong>
                            </div>
                            <div class="extra-wrap">
                                <h4>amet turpis eu tempus volut</h4>
                                <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla porta urna. Morbi eleifend imperdiet us, nec mattis mi faucibus venenatis. Pellentesque vulputate.</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="badge">
                                26 <span>jun</span>
                                <strong>9 <img src="img/page2_icon1.png" alt=""></strong>
                            </div>
                            <div class="extra-wrap">
                                <h4>Nulla facilis Integer plac</h4>
                                <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla porta urna. Morbi eleifend imperdiet us, nec mattis mi faucibus venenatis. Pellentesque vulputate.</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="badge">
                                28 <span>jun</span>
                                <strong>8 <img src="img/page2_icon1.png" alt=""></strong>
                            </div>
                            <div class="extra-wrap">
                                <h4>facilis Integer placerat nisi</h4>
                                <p>Donec consectetur ultrices erat, a fermentum nisi blandit quis. Mauris sagittis mi eros, id fermentum felis accumsan at. Morbi urna turpis, consectetur non gravida non, consecum sociis natoque.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 values-box">
                    <h2 class="center indent">Our Advantages</h2>
                    <h4>Praesent egestas eleifend est, eget trist ique quam. Nulla facilisi</h4>
                    <p>Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget fringilla nisl nulla porta urna. Morbi eleifend imperdiet elementum.</p>
                    <ul class="list1-1">
                        <li><a href="#">Lorem ipsum dolor sit adipiscing</a></li>
                        <li><a href="#">Sus ut felis orci sed triste</a></li>
                        <li><a href="#">Tristique diama phare tralibero</a></li>
                        <li><a href="#">Fermentum lorem ipsum dolor sit</a></li>
                        <li><a href="#">Adipiscing elitsus ut  felis orcise</a></li>
                        <li><a href="#">Tristique diama phare tralibero</a></li>
                        <li><a href="#">Fermentuma lorem ipsum dolor</a></li>
                        <li><a href="#">Tristique diama phare tralibero</a></li>
                        <li><a href="#">Aliquam eleifend vel velit sit amet inter</a></li>
                        <li><a href="#">Nullam id elit accumsan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="testimBox">
        <div class="container">
            <h2 class="center indent">Our teachers</h2>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumb-pad3">
                        <div class="thumbnail">
                            <figure><img src="img/page2_pic2.jpg" alt=""></figure>
                            <div class="caption">
                                <a href="#">Eva Adamson</a>
                                <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumb-pad3">
                        <div class="thumbnail">
                            <figure><img src="img/page2_pic3.jpg" alt=""></figure>
                            <div class="caption">
                                <a href="#">David Austin</a>
                                <p>Nulla accumsan mauris, eget fringilla nisl nulla porta urna. Morbi eleifend imperd.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumb-pad3">
                        <div class="thumbnail">
                            <figure><img src="img/page2_pic4.jpg" alt=""></figure>
                            <div class="caption">
                                <a href="#">Natalie Barnes</a>
                                <p>Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumb-pad3">
                        <div class="thumbnail">
                            <figure><img src="img/page2_pic5.jpg" alt=""></figure>
                            <div class="caption">
                                <a href="#">Thomas Bishop</a>
                                <p>Morbi eleifend imperdiet elementum. Nu nc ornare iaculis lectus, nec mattis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offer-box"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h2 class="center indent">Our Process</h2>
                    <ul class="list1">
                        <li>
                            <div class="badge">1</div>
                            <div class="extra-wrap">
                                <h4>amet turpis eu tempus volut</h4>
                                <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla porta urna. Morbi eleifend imperdiet us, nec mattis mi faucibus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="badge">2</div>
                            <div class="extra-wrap">
                                <h4>Nulla facilis Integer plac</h4>
                                <p>Vestibulum nec egestas massa. Donec vulputate, ligula eget vehicula tincidunt, nibh nulla porta urna. Morbi eleifend imperdiet us, nec mattis mi faucibus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="badge">3</div>
                            <div class="extra-wrap">
                                <h4>facilis Integer placerat nisi</h4>
                                <p>Mauris sagittis mi eros, id fermentum felis accumsan at. Morbi urna turpis, consectetur non gravida non, consecum sociis natoque. penatibus et magnis.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h2 class="center indent">Why choose us?</h2>
                    <h4>egestas eleifend est, eget trist quam</h4>
                    <p>Donec vulputate, ligula eget vehicula tincidunt, nibh nulla accumsan mauris, eget fringilla nisl nulla porta urna. Morbi eleifend imperdiet elementum.</p>
                    <ul class="list1-1">
                        <li><a href="#">Fermentum lorem ipsum dolor sit</a></li>
                        <li><a href="#">Adipiscing elitsus ut  felis orcise</a></li>
                        <li><a href="#">Tristique diama phare tralibero</a></li>
                        <li><a href="#">Fermentuma lorem ipsum dolor</a></li>
                        <li><a href="#">Tristique diama phare tralibero</a></li>
                        <li><a href="#">Lorem ipsum dolor sit adipiscing</a></li>
                        <li><a href="#">Sus ut felis orci sed triste</a></li>
                        <li><a href="#">Tristique diama phare tralibero</a></li>
                        <li><a href="#">Aliquam eleifend vel velit sit amet inter</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2 class="center indent">students say</h2>
                    <ul class="list2">
                        <li>
                            <figure><img src="img/quote.png" alt=""></figure>
                            <div class="extra-wrap">
                                <p>Pellentesque vulputate libero placerat urna pretium, sollicitudin iaculis mi tincidunt. Phasellus eu lectus erat. Aenean et lacus eu dolor rutrum euismod eget metus sed tincidunt fermentum. Ut feugiat posuere fringilla vitae, ultricies vel nunc. Nam augue nibh, blandit a luctus eget, faucib.</p>
                                <a href="#">Maria Brooks, usa</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="img/quote.png" alt=""></figure>
                            <div class="extra-wrap">
                                <p>Pellentesque vulputate libero placerat urna pretium, sollicitudin iaculis mi tincidunt. Phasellus eu lectus erat. Aenean et lacus eu dolor rutrum euismod eget metus sed tincidunt fermentum. Ut feugiat posuere fringilla vitae, ultricies vel nunc. Nam augue nibh, blandit a luctus eget, faucib.</p>
                                <a href="#">Steven Donovan, usa</a>
                            </div>
                        </li>
                    </ul>
               </div>
        </div>
    </div>
</div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <p>High School &copy; <em id="copyright-year"></em> <span>|</span> <a href="i{{URL::to('privacy_policy') }}">Privacy policy</a></p>
        <p class="foo_address">28 jackson blvd ste 1020<br>chicago, il 60604-2340</p>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>