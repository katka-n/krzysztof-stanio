@extends('layouts.base-layout')

@section('pageTitle')Absolwenci - {{$graduate['name']}} @endsection
@section('description','Od zera do Webdeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

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
                            <figure><img src="/storage/{{$graduate['photo']}}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>O uczestniku</h3>
                                    <p>{!! $graduate['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="thumbnail">
                                <div class="caption">
                                    @if( ! empty($graduate['contact_mail'] || $graduate['contact_phone'] || $graduate['social_account']))
                                        <h3>Dane kontaktowe</h3>
                                        <ul class="list1-1">
                                            @if( ! empty($graduate['contact_mail']))
                                                <li>e-mail: {{$graduate['contact_mail']}}</li>
                                            @endif
                                            @if( ! empty($graduate['contact_phone']))
                                                <li>telefon: {{$graduate['contact_phone']}}</li>
                                            @endif
                                            @if( ! empty($graduate['social_account']))
                                                <li><a href="{!! $graduate['social_account']!!}">Strona internetowa</a>
                                                </li>
                                            @endif
                                            @endif
                                        </ul>
                                        @if( ! empty($graduate['github_account']))
                                            <h3>Portfolio</h3>
                                            <ul class="list1-1">
                                                <li><a href="{!! $graduate['github_account']!!}">Github</a></li>
                                            </ul>
                                        @endif
                                </div>
                            </div>a
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection