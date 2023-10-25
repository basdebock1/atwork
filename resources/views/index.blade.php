@extends('layouts.wrapper')

@section('title') {{'Home'}} @endsection

@section('content')
    <section class="introduction">
        <x-post :post="$post" />
        <div class="intro__info">
            <h2 id="index__title" class="intro__title">Welkom bij Scouts Sint-Martinus!</h2>
            <div class="info__content">
                <div class="info__text">
                    <h3>Ik wil eens proberen!</h3>
                    <p>
                        De eerste drie keer kan je bij ons gratis proberen. Hebben daarna de scoutingkriebels je te pakken?
                        Schrijf
                        je dan in via de link hieronder.
                    </p>
                    <a class="btn" href="/inschrijven">Inschrijven</a>
                </div>
                <div class="info__text">
                    <h3>Ik heb een vraagje...?</h3>
                    <p>
                        Twijfel niet en stuur ons een mailtje! De groepsleiding neemt dan snel contact op met jou.
                    </p>
                    <a class="btn" href="mailto:groepsleiding@scoutsnieuwkerken.be">Contacteer ons!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="nieuws">
        <h2>Laatste nieuwtjes</h2>
        <div class="nieuws__slider">
            @foreach ($articles as $article)
                <x-article :article=$article />
            @endforeach
        </div>
    </section>
    <section class="trooper">
        <h2>Trooper</h2>
        <div class="trooper__content">
            <div class="trooper__text">
                <h3>Wil jij ons steunen?</h3>
                <p>Ken jij Trooper al? Het principe is simpel! Jij koopt allerlei spulletjes online en zonder één cent extra
                    te
                    betalen, krijgen wij een klein procentje van jouw aankoop.</p>
                <p>Via de link hieronder kom je op onze trooper pagina, waar je je favoriete webwinkel kan selecteren en
                    naar
                    hartenlust kan shoppen!</p>
                <p>Met jouw steun kunnen wij nieuw spelmateriaal, tenten, sjorgerief, enz... kopen. Bedankt!! 👊</p>
                <a class="btn" href="https://www.trooper.be/nl/trooperverenigingen/scoutsnieuwkerkenwaas">Onze Trooper
                    Pagina</a>
            </div>
            <div class="trooper__image" style="background-image: url('/images/paint brush.png')">
                <img src="images/trooper.png" alt="trooper">
            </div>
        </div>
    </section>
@endsection
