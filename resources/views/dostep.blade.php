@extends('layouts.base-layout')

@section('pageTitle', 'Blog')

@section('content')


    <div class="global indent">
        <!--content-->
        <div class="container">

            <div class="panel panel-default" style="margin-top: 90px; margin-bottom: 200px;">

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dostep') }}">

                        <label for="email" class="col-md-4 control-label">Podaj adres E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4"><br>
                                <button type="submit" class="btn-default btn1">
                                    Wejdź
                                </button>
                            </div>
                        </div>
            </div>
    </div>
    </div>



    @endsection
