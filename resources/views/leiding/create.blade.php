<x-app-layout>
    <div class="admin">
        <form class="admin-form" action="/leiding" method="POST" enctype="multipart/form-data">
            <h2>Maak een nieuwe leider aan</h2>
            @csrf
            <label for="">Voornaam:</label>
            <input type="text" id="fname" name="fname">
            <label for="excerpt">Achternaam:</label>
            <input type="text" id="lname" name="lname">
            <label for="excerpt">Tak:</label>
            <select name="tak" id="tak">
                <option value="kapoenen">Kapoenen</option>
                <option value="wouters">Wouters</option>
                <option value="jonggivers">Jonggivers</option>
                <option value="givers">Givers</option>
            </select>
            <label for="totem">Totem:</label>
            <input type="text" id="totem" name="totem">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="phone">GSM nummer:</label>
            <input type="tel" id="phone" name="phone">
            <label for="phone">Foto leider (jpeg, jpg, png, webp):</label>
            <input class="file__input" type="file" name="image" id="image"><br>
            <button class="btn green">Maak nieuwe leider aan</button>
        </form>
    </div>

</x-app-layout>
