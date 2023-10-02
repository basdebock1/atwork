@extends('layouts.wrapper')
@section('content')
    <section class="intro">
        <h1 class="intro__title">Inschrijven</h1>
        <div class="content__rev">
            <img class="content__image" src="images/intros/inschrijven.jpg" alt="">
            <div class="intro__info">
                <div class="info__content">
                    <div class="info__text">
                        <h2 id="index__title">Klaar voor de start?</h2>
                        <h3>Groepsadministratie</h3>
                        <p>
                            De Groepsadministratie is het online programma voor de ledenadministratie van Scouts en Gidsen
                            Vlaanderen. Hier kan je de individuele steekkaart van je kinderen invullen en wijzigen.
                        </p>
                        <a class="link" href="https://groepsadmin.scoutsengidsenvlaanderen.be/"
                            target="_blank">Groepsadmin</a>
                    </div>
                    <div class="info__text">
                        <h3>Hulp nodig?</h3>
                        <p>
                            Weet je niet goed wat, wie, hoe, waar,...? Zit je met vragen? Dan kan je steeds terecht bij de
                            groepsleiding! Na onze stardag komt de leiding ook op huisbezoek. Zij bezorgen je alle nodig
                            info om je in te schrijven. Wil je nu al meer weten? Kijk dan op de site van Scouts en Gidsen.
                        </p>
                        <a class="link" href="https://www.scoutsengidsenvlaanderen.be/ouders/praktisch/inschrijven">S&G
                            Vlaanderen Inschrijven</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content__wrapper">
        <h2>Inschrijvingsformulier</h2>
        <iframe id="formIframe" title="form inschrijving"
        src="https://groepsadmin.scoutsengidsenvlaanderen.be/groepsadmin/lidworden?groep=O3109G"
        allowfullscreen></iframe>
    </section>
@endsection
