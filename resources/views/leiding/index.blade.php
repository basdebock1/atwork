@extends('layouts.wrapper')
@section('content')
    <section class="intro">
        <h1 class="intro__title">Leiding</h1>
        <div class="content__rev">
            <img class="content__image" src="images/intros/leiding.jpg" alt="">
            <div class="intro__info">
                <div class="info__content">
                    <div class="info__text">
                        <h2 id="index__title">De leidingsploeg</h2>
                        <h3>Om de leiding te groeten, groet!</h3>
                        <p>
                            Onze scoutsgroep heeft naast heel plezante leden ook een super enthousiaste leidingsploeg.
                        </p>
                        <p>
                            Elke zondag staan wij van 14u tot 17u paraat op ons terrein De Schakel om onze leden een
                            onvergetelijke tijd te bezorgen! Scroll verder naar onder om te kijken wie jouw leiding is.
                        </p>
                    </div>
                    <div class="info__text">
                        <h3>Een algemeen vraagje?</h3>
                        <p>
                            Voor praktische vragen kan je onze groepsleiding altijd bereiken via mail. Zij nemen dan zo
                            snel mogelijk contact op met jou! Vragen gericht naar een bepaalde tak stuur je best naar het
                            e-mail adres van deze tak.
                        </p>
                        <a class="btn" href="mailto:groepsleiding@scoutsnieuwkerken.be">E-mail
                            groepsleiding</a>
                    </div>
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
