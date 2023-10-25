@extends('layouts.wrapper')

@section('title') {{'Takken'}} @endsection

@section('content')
    <section class="intro">
        <h1 class="intro__title">Takken</h1>
        <div class="content__rev">
            <img class="content__image" src="images/intros/takken.jpg" alt="">
            <div class="intro__info">
                <h2 id="index__title">Een tak? Was da?!</h2>
                <div class="info__content">
                    <div class="info__text">
                        <h3>Leeftijdsgroepen</h3>
                        <p>
                            Een tak? Dat groeit toch aan een boom? Hoewel dit op het eerste zicht niks met scouting te maken
                            heeft, zit er een mooie symboliek in deze benaming.
                        </p>
                        <p>
                            Een tak is simpelweg een 'leeftijdsgroep' waarin je bij onze scouts terecht komt. Van kleine
                            kapoen tot ervaren leider, er staat je een spannend avontuur te wachten!
                        </p>
                    </div>
                    <div class="info__text">
                        <h3>Meer over takwerking</h3>
                        <p>
                            Wil je graag wat meer info over de werking van een tak? Neem dan een kijkje op de website van
                            Scouts
                            & Gidsen Vlaanderen!
                        </p>
                        <a class="link" target="_blank"
                            href="https://www.scoutsengidsenvlaanderen.be/ouders/leeftijdstakken">S&G
                            Vlaanderen
                            Takken</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tak__wrapper">
        @foreach ($takken as $tak)
            <x-tak :tak=$tak />
        @endforeach
    </section>
@endsection
