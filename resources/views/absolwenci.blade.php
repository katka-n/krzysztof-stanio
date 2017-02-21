@extends('layouts.base-layout')

@section('pageTitle', 'Absolwenci szkoleń')
@section('description','Absolwenci szkoleń prowadzonych przez Krzysztof Stanio')
@section('keywords', 'szkolenia, absolwenci, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

@section('livechat')
    @include('livechat')
@endsection

@section('content')
    <!--header-->
    <div class="global indent">
        <!--content-->
        <div class="testimBox">
            <div class="container">
                <h2 class="center indent">Absolwenci moich kursów</h2>
                <div class="row">
                    @foreach($graduates as $graduate)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb-pad9">
                                <div class="thumbnail">
                                    <figure>
                                        <img src="/storage/{{$graduate['photo']}}" class="thumbnail" alt="">
                                    </figure>
                                    <div class="caption">
                                        <p><b><a title="{{$graduate['name']}}" href="/absolwent/{{$graduate['id']}}"
                                       class="btn-default btn1">{{$graduate['name']}}</a></b></p>
                                        {!!$graduate['description']!!}
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection