<x-app-layout>
    <h3>Maak een nieuwe leider aan</h3>
    <form action="/leiding" method="POST" enctype="multipart/form-data">
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
        <input type="file" name="image" id="image">
        <button>Maak nieuwe leider aan</button>
    </form>
</x-app-layout>
