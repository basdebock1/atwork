@extends('layouts.wrapper')
@section('content')
    <section class="intro">
        <h1 class="intro__title">Nieuws</h1>
        <div class="intro__content">
            <div class="intro__info">
                <h2 id="index__title">Altijd up to date!</h2>
                <div class="info__content">
                    <div class="info__text">
                        <h3>De Fluiter</h3>
                        <p>
                            Alle info over normale vergaderingen vind je in ons maandelijks boekje 'De Fluiter'. Je vind dit
                            boekje tussen alle nieuwsartikels.
                        </p>
                    </div>
                    <div class="info__text">
                        <h3>Sociale Media</h3>
                        <p>
                            Volg ons zeker op sociale media. Daar verschijnen leuke posts, maar er komen ook informatieve
                            berichten op onze pagina's. Like dus zeker onze Facebook-pagina en volg ons op Instagram.
                        </p>
                        <a class="link-secondary" target="_blank"
                            href="https://www.instagram.com/scouts.sintmartinus/"><i class="fab fa-instagram"></i>
                            Instagram</a>
                        <a class="link-secondary" target="_blank" href="https://www.facebook.com/scoutsmartinus"><i
                                class="fab fa-facebook"></i> Facebook</a>
                    </div>
                </div>
            </div>
            <div class="article">
                @if ($latestArticle)
                    <h2>Laatste nieuwtje</h2>
                    <x-article :article="$latestArticle" />
                @else
                    <h2>Geen berichten gevonden</h2>
                @endif
            </div>
        </div>
    </section>
    <section>
        <h2>Alle nieuwsberichten</h2>
        <div class="articles">
            @foreach ($articles as $article)
                <x-article :article=$article />
            @endforeach
        </div>
    </section>
@endsection
