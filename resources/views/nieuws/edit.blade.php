<x-app-layout>
    <form action="/nieuws/{{ $article->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">* Titel van bericht:</label>
        <input type="text" id="title" name="title" value="{{ $article->title }}">
        <label for="excerpt">* Intro (+/- 4 zinnen):</label>
        <textarea name="excerpt" id="excerp" cols="30" rows="5">{{ $article->excerpt }}</textarea>
        <label for="text">* Volledig bericht (+/- 10 zinnen):</label>
        <textarea name="text" id="text" cols="30" rows="10">{{ $article->text }}</textarea>
        <label for="image">Foto voor bericht (jpeg, jpg, png, webp)</label>
        <input type="file" name="image" id="image">
        <label for="doc_name">Naam voor bestand</label>
        <input type="text" name="doc_name" id="doc_name">
        <label for="doc">Bestand (enkel pdf)</label>
        <input type="file" name="doc" id="doc">
        <button>Nieuwe gegevens opslaan</button>
    </form>
    <form action="/nieuws/{{ $article->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="secondary">Verwijder bericht</button>
    </form>
</x-app-layout>