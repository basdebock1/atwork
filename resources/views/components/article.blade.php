<div class="article">
    <div>
        <img src="/images/articles/{{ $article->image_path }}" alt="">
        <p class="article__date"><i class="fa-regular fa-clock"></i> {{ $article->getDate() }}</p>
        <h3 class="article__title">{{ $article->title }}</h3>
        <p class="article__excerpt">{{ $article->excerpt }}</p>
    </div>
    <a class="link" href="nieuws/{{$article->id}}">Lees meer ...</a>
</div>