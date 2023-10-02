<div>
    @if ($tak->id % 2 != 0)
        <div class="content">
    @else
        <div class="content__rev">
    @endif
    <div class="content__text">
        <h2>{{ $tak->tak }}</h2>
        <h3 class="content__title">{{ $tak->title }}</h3>
        <p class="subheading">{{ $tak->age }}</p>
        @php
            echo nl2br($tak->text);
        @endphp
        </p>
        <a href="mailto:{{ $tak->email }}" class="btn">Stuur ons een berichtje!</a>
    </div>

    <img class="content__image" src="images/takken/{{ $tak->image_path }}" alt="{{ $tak->tak }}">
    </div>
</div>
