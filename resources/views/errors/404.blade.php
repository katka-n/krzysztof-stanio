@extends('layouts.base-layout')

@section('content')

<div class="global indent">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-lg-offset-2 errorBox">
                <figure><img src="img/error.png" alt=""></figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 errorBox1">
                <h2>Przepraszamy!<br>Strona nie została odnaleziona</h2>
                <p> Strona, której szukasz mogła zostać usunięta, zmieniła nazwę lub jest tymczasowo niedostępna.</p>
                <p>Użyj poniższej wyszukiwarki, by przeglądnąć zawartość strony:</p>
                <form id="search-404" class="search" action="search.php" method="GET" accept-charset="utf-8">
                    <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
                    <a href="#" onClick="document.getElementById('search-404').submit()" class="btn-default btn1">wyślij</a>
                </form>
                <h4>Wyniki wyszukiwania:</h4>
                <div id="search-results"></div>
            </div>
        </div>
    </div>
</div>
