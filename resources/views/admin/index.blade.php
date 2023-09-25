<x-app-layout>
    <h1>DASHBOARD</h1>
    <section class="admin-intro">
        <div class="introduction">
            <x-intro-top :intropost="$intropost" />
            <div class="intro__info">
                <form action="/admin/{{ $intropost->id }}" method="POST" enctype="multipart/form-data"
                    style="margin: 0; width:100%;">
                    @csrf
                    @method('PUT')
                    <label for="description">Titel van de post:</label>
                    <input type="text" id="description" name="description">
                    <label for="file">Bestand (image/video):</label>
                    <input type="file" name="file" id="file">
                    <button>Pas intro post aan</button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
