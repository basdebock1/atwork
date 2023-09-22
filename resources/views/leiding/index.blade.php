@extends('layouts.wrapper')
@section('content')
    <section class="intro">
        <h1 class="intro__title">Leiding</h1>
        <div class="intro__content">
            <div class="intro__card">
                <h2>Om de leiding te groeten, groet!</h2>
                <div class="card__content">
                    <p>
                        Onze scoutsgroep heeft naast heel plezante leden ook een super enthousiaste leidingsploeg.
                    </p>
                    <p>
                        Elke zondag staan wij van 14u tot 17u paraat op ons terrein De Schakel om onze leden een
                        onvergetelijke tijd te bezorgen! Scroll verder naar onder om te kijken wie jouw leiding is.
                    </p>
                </div>
            </div>
            <div class="intro__info">
                <div class="info__content">
                    <div class="info__text">
                        <h3>Een algemeen vraagje?</h3>
                        <p>
                            Voor praktische vragen kan je onze groepsleiding altijd bereiken via mail. Zij nemen dan zo snel
                            mogelijk contact op met jou! Vragen gericht naar een bepaalde tak stuur je best naar het e-mail adres van deze tak.
                        </p>
                        <a class="link-secondary" href="mailto:groepsleiding@scoutsnieuwkerken.be">E-mail groepsleiding</a>
                    </div>
                    <div class="info__text">
                        <h3>Wat drijft ons?</h3>
                        <p>
                            Leiding worden is niet zomaar een kleine hobby tussendoor. Naast een gewone spelvergadering zijn er nog vele extra taken die wij als leiding op ons nemen. En dit doen we met veel enthousiasme en plezier! Wil je weten wat we nog doen en waarom? Neem dan een kijkje op de site van Scouts & Gidsen Vlaanderen.
                        </p>
                        <a class="link" target="_blank" href="https://www.scoutsengidsenvlaanderen.be/ouders/praktisch/leiding">S&G
                            Vlaanderen
                            Leiding</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-leiding tak="kapoenen" />
    <x-leiding tak="wouters" />
    <x-leiding tak="jonggivers" />
    <x-leiding tak="givers" />
@endsection
