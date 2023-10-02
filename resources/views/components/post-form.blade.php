    <form action="/post" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <h2>Maak een nieuwe post aan!</h2>
        <h3>Caption</h3>
        <textarea name="description" id="description"></textarea>
        <div class="form__files">
            <h3>Foto's & video's</h3>
            <div class="file__list">
                <input class="file__input" type="file" name="file[]">
            </div>
            <div class="form__buttons">
                <button class="add-file" type="button"><i class="fa fa-plus"></i></button>
                <button class="remove-file" type="button"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <button class="btn blue" type="submit">Nieuwe post opslaan</button>
    </form>
