@extends('layouts.base-layout')

@section('pageTitle', 'Absolwenci')
@section('description','Od zera do Webdeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

@section('content')
    <!--header-->
    <div class="global indent">
        <!--content-->
        <div class="testimBox">
            <div class="container">
                <h2 class="center indent">Absolwenci moich kursów</h2>
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb-pad2">
                                <div class="thumbnail">
                                    <figure><img src="/img/graduates/{{$graduates[$i]['photo']}}" class="thumbnail" alt=""></figure>
                                    <div class="caption">
                                        <p><b>{{$graduates[$i]['name']}}</b></p>
                                        <p>{{$graduates[$i]['description']}}</p>
                                        <a href="/absolwent/{{$graduates[$i]['id']}}" class="btn-default btn1">Czytaj
                                            dalej...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="offer-box">
            <div class="container">
                <
                <div class="row">
                    @for ($i = 4; $i < 8; $i++)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb-pad2">
                                <div class="thumbnail">
                                    <figure><img src="/img/graduates/{{$graduates[$i]['photo']}}" class="thumbnail" alt=""></figure>
                                    <div class="caption">
                                        <p><b>{{$graduates[$i]['name']}}</b></p>
                                        <p>{{$graduates[$i]['description']}}</p>
                                        <a href="/absolwent/{{$graduates[$i]['id']}}" class="btn-default btn1">Czytaj
                                            dalej...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection