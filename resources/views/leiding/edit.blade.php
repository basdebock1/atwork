<x-app-layout>
    <div class="admin" style="gap: 0">
        <form class="admin-form" action="/leiding/{{ $leider->id }}" method="POST" enctype="multipart/form-data">
            <h3>Pas leiding aan</h3>
            @csrf
            @method('PUT')
            <label for="">Voornaam:</label>
            <input type="text" id="fname" name="fname" value="{{ $leider->fname }}">
            <label for="excerpt">Achternaam:</label>
            <input type="text" id="lname" name="lname" value="{{ $leider->lname }}">
            <label for="excerpt">Tak:</label>
            <select name="tak" id="tak">
                <option value="kapoenen" {{ $leider->tak == 'Kapoenen' ? 'selected' : '' }}>Kapoenen</option>
                <option value="wouters" {{ $leider->tak == 'Wouters' ? 'selected' : '' }}>Wouters</option>
                <option value="jonggivers" {{ $leider->tak == 'Jonggivers' ? 'selected' : '' }}>Jonggivers</option>
                <option value="givers" {{ $leider->tak == 'Givers' ? 'selected' : '' }}>Givers</option>
            </select>
            <label for="totem">Totem:</label>
            <input type="text" id="totem" name="totem" value="{{ $leider->totem }}">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $leider->email }}">
            <label for="phone">GSM nummer:</label>
            <input type="tel" id="phone" name="phone" value="{{ $leider->phone }}">
            <label for="image">Foto leider (jpeg, jpg, png, webp):</label>
            <input type="file" name="image" id="image">
            <button class="btn blue">Gegevens opslaan</button>
        </form>
        <form class="admin-form" action="/leiding/{{ $leider->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn red">Verwijder leider</button>
        </form>
    </div>

</x-app-layout>
