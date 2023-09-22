<section>
    <div class="leiding__header">
        <h2 class="leiding__titel">Leiding {{ $tak }}</h2>
    </div>
    <div class="leiders">
        @foreach ($leiders as $leider)
            <div class="leiding__card">
                <div>
                    <img src="/images/leiding/{{ $leider->image_path }}" alt="">
                    <h3 class="leiding__naam">{{ $leider->fname }} {{ $leider->lname }}</h3>
                    <p class="leiding__totem subheading">{{ $leider->totem }}</p>
                </div>
                <a class="link-secondary" href="/leiding/{{ $leider->id }}/edit">Pas deze leider aan</a>
            </div>
        @endforeach
    </div>
</section>
