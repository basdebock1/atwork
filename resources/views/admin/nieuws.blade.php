<x-app-layout>
    <div class="admin">
        <div class="admin-section">
            <h1 class="intro__title">Nieuws Admin</h1>
            <p>
                Op deze pagina kan je nieuwsberichten toevoegen en aanpassen. De bovenste 3 berichten worden op de home
                pagina
                getoond. Alle andere berichten kan je terugvinden op de nieuwspagina.
            </p>
        </div>
        <div class="admin-section">
            <h2>Voeg bericht toe</h2>
            <a class="btn green" href="/nieuws/create">Maak een nieuw bericht aan <i class="fa fa-plus"></i></a>
        </div>
        <div class="admin-section">
            <h2>Pas berichten aan</h2>
            <div class="articles">
                @foreach ($articles as $article)
                    <div class="article">
                        <div>
                            <img src="/images/articles/{{ $article->image_path }}" alt="">
                            <h3 class="article__title">{{ $article->title }}</h3>
                            <p class="article__excerpt">{{ $article->excerpt }}</p>
                            <a class="btn" href="/nieuws/{{ $article->id }}/edit">Pas dit bericht aan</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
