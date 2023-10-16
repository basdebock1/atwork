<x-app-layout>
    <div class="admin">
        <form class="admin-form" action="/nieuws" method="POST" enctype="multipart/form-data">
            <h2>Maak nieuw bericht</h2>
            @csrf
            <label for="title">Titel voor het nieuwsartikel</label>
            <input type="text" id="title" name="title">
            <label for="excerpt">Intro tekstje (+/- 4 zinnen)</label>
            <textarea name="excerpt" id="excerp" cols="30" rows="5"></textarea>
            <label for="text">Volledige bericht met text (+/- 3 paragrafen)</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <label for="doc_name">Document name</label>
            <input type="text" name="doc_name" id="doc_name">
            <label for="doc">Document</label>
            <input type="file" name="doc" id="doc">
            <div class="form-checkbox">
                <input type="checkbox" name="fluiter" value="1" style="width: 2rem;">
                <label for="fluiter">Is dit de fluiter?</label>
            </div>
            <button class="btn green">Voeg bericht toe</button>
        </form>
    </div>
</x-app-layout>