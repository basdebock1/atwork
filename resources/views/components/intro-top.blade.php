<div class="introduction__top" style="background-image: url('/images/paint brush.png')">
    <div class="video__wrapper">
        <a target="_blank" href="https://instagram.com/scouts.sintmartinus">
            <div class="video__account">
                <img class="account__thumb" src="images\favicon.ico" alt="">
                <p class="post__title">Scouts Sint-Martinus</p>
            </div>
        </a>
        <video autoplay muted loop>
            <source src="files/intropost/{{ $intropost->file_path }}">
        </video>
    </div>
    <div class="post__description">
        <p>{{ $intropost->description }}</p>
        @php
            $diffInM = Carbon\Carbon::parse($intropost->updated_at)->diffInMinutes(Carbon\Carbon::parse(date('Y-m-d H:i:s')));
            $diffInH = Carbon\Carbon::parse($intropost->updated_at)->diffInHours(Carbon\Carbon::parse(date('Y-m-d H:i:s')));
            $diffInD = Carbon\Carbon::parse($intropost->updated_at)->diffInDays(Carbon\Carbon::parse(date('Y-m-d H:i:s')));
            if($diffInH > 24) {
                echo("<p>- " . $diffInD . " dagen geleden</p>");
            } else if($diffInM > 60) {
                echo("<p>- " . $diffInH . " uren geleden</p>");
            } else {
                echo("<p>- " . $diffInM . " minuten geleden</p>");
            }
        @endphp
    </div>
</div>