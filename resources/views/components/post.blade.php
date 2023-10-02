<div class="post" style="background-image: url('images/paint brush.png')">
    <div class="post__wrapper">
        <div class="post__media">
            @php
                $media = $post->media->all();
            @endphp
            @if ($post->media->count() == 1)
                @if (substr($media[0]->media_path, strpos($media[0]->media_path, '.') + 1) == 'mp4')
                    <video autoplay muted loop>
                        <source src="posts/videos/{{ $media[0]->media_path }}">
                    </video>
                @else
                    <img class="post__image" src="posts/images/{{ $media[0]->media_path }}" alt="">
                @endif
            @else
                <div class="hero__carousel">
                    <div class="swiper-wrapper">
                        @foreach ($media as $m)
                            <div class="swiper-slide">
                                @if (substr($m->media_path, strpos($m->media_path, '.') + 1) == 'mp4')
                                    <video autoplay muted loop>
                                        <source src="posts/videos/{{ $m->media_path }}">
                                    </video>
                                @else
                                    <img class="post__image" src="posts/images/{{ $m->media_path }}" alt="">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <a class="post__account" href="https://www.instagram.com/scouts.sintmartinus">
                <img class="account__image" src="posts/images/logo.png" alt="">
                <p class="account__name">scouts.sint-martinus</p>
            </a>
            <div class="post__description">
                <p class="post__description__text">
                    {{ $post->description }}
                </p>
                <a class="post__link" href="https://www.instagram.com/scouts.sintmartinus">Bekijk meer...</a>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
