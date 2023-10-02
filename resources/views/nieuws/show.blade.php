@extends('layouts.wrapper')
@section('content')
    <section>
        <a class="link-back" href="/nieuws">Back to news</a>
        <h2 class="article__title__detail">{{ $article->title }}</h2>
        <div class="article__detail">
            <div class="article__image__detail">
                <img src="/images/articles/{{ $article->image_path }}" alt="">
            </div>
            <div class="article__content__detail">
                <p class="article__date">{{ $article->created_at->formatLocalized('%D - %T') }}</p>
                <p class="article__excerpt__detail">{{ $article->excerpt }}</p>
                <p class="article__text__detail">
                    @php
                        echo nl2br($article->text);
                    @endphp
                </p>
                @if ($article->document_path != null)
                    <a class="link-secondary"
                        href="/files/articles/{{ $article->document_path }}">{{ $article->document_name }}</a>
                @endif
            </div>
        </div>
    </section>
@endsection
