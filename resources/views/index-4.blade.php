@extends('layouts.base-layout')

@section('content')

    <div class="global indent">
        <div class="container">
            <div class="map">
                <iframe width="600" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyW-RXOJcFkcR0XOavrwG1Js&key=AIzaSyANOlgA2_niuLlh-9SvtWkOXoBtDLQWAvs"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="formBox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h2 class="center indent">Dane kontaktowe</h2>
                        <div class="info">
                            <h4>Adres:</h4>
                            <p>ul. Ketlinga 1, 30-389 Kraków</p>
                            <p>+ 48 535 001 087</p>

                        </div>
                    </div>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{Session::get('message')}}
                        </div>
                    @endif


                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h2 class="center indent">Formularz kontaktowy</h2>

                        <div id="contact-form">
                            <div class="contact-form-loader"></div>


                            {!! Form::open(['method' => 'POST','route' => 'contact_store']) !!}

                            <label class="name form-div-1">
                                {!! Form::text('name', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Imię i nazwisko',
                                          )) !!}
                            </label>

                            <label class="email form-div-2">
                                {!! Form::text('email', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'adres e-mail',
                                          )) !!}
                            </label>

                            <label class="email form-div-3">
                                {!! Form::text('phone', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'numer telefonu',
                                          )) !!}
                            </label>

                            <label class="message form-div-4">
                                {!! Form::textarea('message', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Wiadomość',
                                          )) !!}
                            </label>

                            <div class="form-group">
                                {!! Form::submit('Wyślij!',
                                  array('class'=>'btn-default btn1')) !!}
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('footer')