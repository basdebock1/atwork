<x-app-layout>
    <div class="admin">
        <form class="admin-form" action="/nieuws" method="POST" enctype="multipart/form-data">
            <h2>Maak nieuw bericht</h2>
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <label for="excerpt">Excerpt:</label>
            <textarea name="excerpt" id="excerp" cols="30" rows="5"></textarea>
            <label for="text">Text:</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <label for="doc_name">Document name</label>
            <input type="text" name="doc_name" id="doc_name">
            <label for="doc">Document</label>
            <input type="file" name="doc" id="doc">
            <button class="btn green">Voeg bericht toe</button>
        </form>
    </div>
</x-app-layout>