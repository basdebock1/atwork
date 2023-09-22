@extends('layouts.wrapper')
@section('content')
    <section class="intro">
        <h1 class="intro__title">Nieuws</h1>
        <div class="intro__content">
            <div class="intro__card">
                <h2>Altijd up to date!</h2>
                <div class="card__content">
                    <h3>De Fluiter</h3>
                    <p>
                        Alle info over normale vergaderingen vind je in ons maandelijks boekje 'De Fluiter'. Je vind dit
                        boekje tussen alle nieuwsartikels.
                    </p>
                    <h3>Sociale Media</h3>
                    <p>
                        Volg ons zeker op sociale media. Daar verschijnen leuke posts, maar er komen ook informatieve
                        berichten op onze pagina's. Like dus zeker onze Facebook-pagina en volg ons op Instagram.
                    </p>
                    <a class="link-secondary light" target="_blank" href="https://www.instagram.com/scouts.sintmartinus/"><i class="fab fa-instagram"></i> Instagram</a>
                    <a class="link-secondary light" target="_blank" href="https://www.facebook.com/scoutsmartinus"><i class="fab fa-facebook"></i> Facebook</a>
                </div>
            </div>
            <div class="article">
                <h2>Laatste nieuwtje</h2>
                <x-article :article="$latestArticle" />
            </div>
            {{-- <div class="intro__info">
                <div class="info__content">
                    <div class="info__text">
                        <h3>De Fluiter</h3>
                        <p>
                            Alle info over normale vergaderingen vind je in ons maandelijks boekje 'De Fluiter'. Je vind dit
                            boekje tussen alle nieuwsartikels. Wanneer je doorklikt naar de detailpagina kan je daar het
                            document openen.
                        </p>
                    </div>
                    <div class="info__text">
                        <h3>Sociale Media</h3>
                        <p>
                            Volg ons zeker op sociale media. Daar verschijnen leuke posts, maar er komen ook informatieve
                            berichten op onze pagina's. Like dus zeker onze Facebook-pagina en volg ons op Instagram.
                        </p>
                        <a class="link-secondary" target="_blank" href="https://www.instagram.com/scouts.sintmartinus/"><i class="fab fa-instagram"></i> Instagram</a>
                        <a class="link-secondary" target="_blank" href="https://www.facebook.com/scoutsmartinus"><i class="fab fa-facebook"></i> Facebook</a>
                    </div>
                </div>
            </div> --}}
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
