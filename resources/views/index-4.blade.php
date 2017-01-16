<!DOCTYPE html>
<html lang="en">
<head>
<title>CONTACT</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/contact-form.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>  
<script src="js/bootstrap-filestyle.js"></script> 
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
                    <li class="active"><a href="{{URL::to('contact') }}p">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--content-->
<div class="global indent">
    <div class="container">
        <div class="map">
            <iframe width="600" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyW-RXOJcFkcR0XOavrwG1Js&key=AIzaSyANOlgA2_niuLlh-9SvtWkOXoBtDLQWAvs" allowfullscreen></iframe>        </div>
    </div>
    <div class="formBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="center indent">Dane kontaktowe</h2>
                    <div class="info">
                        <h4>Adres:</h4>
                        <p>ul. Ketlinga 1, 30-389 Kraków</p>
                        <p>+1 800 559 6580<br>+1 959 603 6035<br>+1 504 889 9898</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h2 class="center indent">Formularz kontaktowy</h2>
                    <form id="contact-form">
                          <div class="contact-form-loader"></div>
                          <fieldset>
                            <label class="name form-div-1">
                              <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
                              <span class="empty-message">*This field is required.</span>
                              <span class="error-message">*This is not a valid name.</span>
                            </label>
                            <label class="email form-div-2">
                              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                              <span class="empty-message">*This field is required.</span>
                              <span class="error-message">*This is not a valid email.</span>
                            </label>
                            <label class="phone form-div-3">
                              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@JustNumbers" />
                              <span class="empty-message">*This field is required.</span>
                              <span class="error-message">*This is not a valid phone.</span>
                            </label>
                            <label class="message form-div-4">
                              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                              <span class="empty-message">*This field is required.</span>
                              <span class="error-message">*The message is too short.</span>
                            </label>
                            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
                            <div>
                              <a href="#" data-type="submit" class="btn-default btn1">submit</a>
                            </div>
                          </fieldset> 
                          <div class="modal fade response-message">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                  You message has been sent! We will be in touch soon.
                                </div>      
                              </div>
                            </div>
                          </div>
                    </form>
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