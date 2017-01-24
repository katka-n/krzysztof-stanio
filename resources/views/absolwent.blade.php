@extends('layouts.base-layout')

@section('content')
    <!--header-->
    <div class="global indent">
        <!--content-->
        <div class="testimBox">
            <div class="container">
                <h2 class="center indent">{{ $graduate['name']}}</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="thumb-pad2 wow fadeInRight">
                            <figure><img src="{{$graduate['photo']}}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>O uczestniku</h3>
                                    <p>{{$graduate['description']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>Dane kontaktowe</h3>
                                    <ul class="list1-1">
                                        <li>e-mail: {{$graduate['contact_mail']}}</li>
                                        <li>telefon: {{$graduate['contact_phone']}}</li>
                                        <li><a href="{{$graduate['social_account']}}">Facebook</a></li>
                                    </ul>
                                    <h3>Portfolio</h3>
                                    <ul class="list1-1">
                                        <li><a href="{!! $graduate['github_account']!!}">Github</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection