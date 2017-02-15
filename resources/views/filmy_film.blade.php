@extends('layouts.base-layout')

@section('pageTitle'){{$movie['seo_title']}}@endsection
@section('description'){{$movie['meta_description']}}@endsection
@section('keywords'){{$movie['meta_keywords']}}@endsection

@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 thumb-box4">
                    <h2 class="center indent">film</h2>
                    <div class="thumb-pad7 clearfix">
                        <div class="extra-wrap">
                            <div>
                                <div class="badge">
                                    {!! polDay($movie) !!}
                                    <span>{!! polMonth($movie) !!}</span>
                                    {{--<strong>{!! commentsNumber($movie) !!}<img src="/img/page2_icon1.png" alt=""></strong>--}}
                                </div>
                            </div>
                            <a href="/film/{{$movie['slug']}}" class="lnk">{{$movie['title']}}</a>
                            <p class="post">Wysłane {{$movie['created_at']}}, w
                                kategorii {!! categoryName($movie, $moviesCategories)!!}
                                <br>
                            </p>
                            <p> {!!$movie['body']!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 thumb-box4">
                    <h2 class="center indent">Kategorie filmów</h2>
                    <ul class="list1-1 indent">
                        @foreach($moviesCategories as $movieCategory)
                            <li><a href="/filmy/kategoria/{{$movieCategory['name']}}">{{$movieCategory['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h2 class="center indent">Archiwum filmów</h2>
                    <ul class="list1-1">
                        @foreach($moviesByDates as $movie)
                            <li>
                                <a href="/filmy/archiwum/{{$movie->year}}/{{$movie->month}}">{!! fullMonth($movie) !!} {{$movie->year}}  </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection