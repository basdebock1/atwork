<x-app-layout>
    <h2>Pas nieuwsberichten aan</h2>
    <a class="link" href="/nieuws/create">Maak een nieuw bericht aan</a>
    <section>
        <div class="articles">
            @foreach ($articles as $article)
                <div class="article">
                    <div>
                        <img src="/images/articles/{{ $article->image_path }}" alt="">
                        <h3 class="article__title">{{ $article->title }}</h3>
                        <p class="article__excerpt">{{ $article->excerpt }}</p>
                    </div>
                    <a class="link-secondary" href="/nieuws/{{ $article->id }}/edit">Pas dit bericht aan</a>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
