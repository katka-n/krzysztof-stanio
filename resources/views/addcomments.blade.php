@extends('layouts.base-layout')

@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 thumb-box4">
                    <h2 class="center indent">twój komentarz</h2>
                    <div class="thumb-pad7 clearfix">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="extra-wrap">
                            {!! Form::open([
                             'url' => '/blog/savecomments/'.$id,
                             'id' => 'comment-create',
                             'class' => 'form-horizontal col-md-6',
                             'files' => true,
                             'role'  => 'form',
                             'method'  => 'post'
                             ]) !!}

                            {!! Form::hidden('post_id', $id, ['class'=>'form-control']) !!}
                            <div class="inner-wrap">
                                {!! Form::label('comment','Twój komentarz'  ) !!}
                                {!! Form::textarea('comment', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="inner-wrap">
                                {!! Form::label('Nick', 'Twój nick'  ) !!}
                                {!! Form::text('nick', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="button-section">
                                {!! Form::submit(trans('Zapisz'), ['id' => 'add-comment', 'class'=>'add-comment']) !!}
                                {{--{!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}--}}
                                {!! Form::close() !!}
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="btn-default.btn1" , style="text-align:center;">
                                {{--{{ $posts->render() }}--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 thumb-box4">
                    <h2 class="center indent">Kategorie wpisów</h2>
                    <ul class="list1-1 indent">
                        @foreach($categories as $category)
                            <li><a href="/blog/{{$category['name']}}">{{$category['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
@endsection