@extends('layouts.base-layout')

@section('content')

<div class="bg_pic">
    <div class="container">
        <p class="title wow fadeInDown" data-wow-delay="0.2s">OD ZERA <br>DO WEBDEVA</p>
        <p class="description wow fadeInUp"><i></i>kursy programowania: online i stacjonarne<em></em></p>
    </div>
</div>
<div class="global">
    <!--content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="thumb-pad1 maxheight wow fadeIn">

                    <div class="badge"><img src="{{ URL::asset('img/page1_icon2.png') }}" alt=""></div>
                    <div class="thumbnail">
                        <div class="caption">
                            <p class="title">Progressive Programs</p>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero. </p>
                            <a href="#" class="btn-default btn1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="thumb-pad1 maxheight">
                    <div class="badge"><img src="{{ URL::asset('img/page1_icon2.png') }}" alt=""></div>
                    <div class="thumbnail">
                        <div class="caption">
                            <p class="title">online education</p>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero. </p>
                            <a href="#" class="btn-default btn1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                <div class="thumb-pad1 maxheight">
                    <div class="badge"><img src="{{ URL::asset('img/page1_icon2.png') }}" alt=""></div>
                    <div class="thumbnail">
                        <div class="caption">
                            <p class="title">International students</p>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero. </p>
                            <a href="#" class="btn-default btn1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box1">
        <div class="container">
            <h2 class="center">For students:</h2>
            <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad2 wow fadeInRight">
                        <figure><img src="{{ URL::asset('img/page1_pic1.jpg') }}" alt=""></figure>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Attendance procedure</h3>
                                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                                <a href="#" class="btn-default btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.2s">
                        <figure><img src="{{ URL::asset('img/page1_pic2.jpg') }}" alt=""></figure>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Health & Help</h3>
                                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                                <a href="#" class="btn-default btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.4s">

                        <figure><img src="{{ URL::asset('img/page1_pic3.jpg') }}" alt=""></figure>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Course Selection</h3>
                                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                                <a href="#" class="btn-default btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box2 center">
        <div class="container">
            <h2 class="center">Current news:</h2>
            <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 date-box wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <div class="badge">
                            22 <span>jun</span>
                            <strong>6 <img src="{{ URL::asset('img/page1_icon4.png') }}" alt=""></strong>
                        </div>
                        <div class="extra-wrap">
                            <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                    <figure><img src="{{ URL::asset('img/page1_pic4.jpg') }}" alt=""></figure>
                </div>
            </div>
            <a href="#" class="btn-default btn1">view more news</a>
        </div>
    </div>
    <div class="thumb-box3">
        <div class="container">
            <h2 class="wow fadeInUp">newsletter sign up</h2>
            <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp">
                    <form id="newsletter" accept-charset="utf-8">
                        <div class="success">Your subscribe request has been sent!</div>
                        <label class="email">
                            <input type="email" value="Enter Your E-mail:">
                            <span class="error">*This is not a valid email address.</span>
                        </label><br>
                        <a href="#" data-type="submit">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

