<section style="padding: 0">
    <div class="leiding__header">
        <h3 class="leiding__titel">Leiding {{ $tak }}</h3>
    </div>
    <div class="leiders">
        @foreach ($leiders as $leider)
            <div class="leiding__card">
                <div>
                    <img src="/images/leiding/{{ $leider->image_path }}" alt="">
                    <h3 class="leider__naam">{{ $leider->fname }} {{ $leider->lname }}</h3>
                    <p class="leider__totem subheading">{{ $leider->totem }}</p>
                </div>
                <a class="btn" href="/leiding/{{ $leider->id }}/edit">Pas deze leider aan</a>
            </div>
        @endforeach
    </div>
</section>
