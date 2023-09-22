<section class="leiding">
    <div class="leiding__header">
        <h2 class="leiding__titel">Leiding {{ $tak }}</h2>
        <a class="leiding__mail link-secondary" href="mailto:{{ $tak }}@scoutsnieuwkerken.be">Stuur ons een berichtje!</a>
    </div>
    <div class="leiders">
        @foreach ($leiders as $leider)
            <div class="leiding__card">
                <div>
                    <img src="images/leiding/{{ $leider->image_path }}" alt="">
                    <h3 class="leider__naam">{{ $leider->fname }} {{ $leider->lname }}</h3>
                    <p class="leider__totem subheading">{{ $leider->totem }}</p>
                </div>
                {{-- <a class="link" href="leiding/{{ $leider->id }}">Over mezelf</a> --}}
            </div>
        @endforeach
    </div>
</section>
