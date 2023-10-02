<x-app-layout>
    <div class="admin">
        <div class="admin-section">
            <h1 class="intro__title">Leiding Admin</h1>
            <p>
                Op deze pagina kan je leiders toevoegen en aanpassen. Om een leider te verwijderen moet eerst aanpassen en onderaan vind je een verwijder knop terug.
            </p>
        </div>
        <div class="admin-section">
            <h2>Maak leider aan</h2>
            <a class="btn green" href="/leiding/create">Maak een nieuwe leider aan <i class="fa fa-plus"></i></a>
        </div>
        <div class="admin-section">
            <h2>Pas leiding aan</h2>
            <x-admin-leiding tak="kapoenen"/>
            <x-admin-leiding tak="wouters"/>
            <x-admin-leiding tak="jonggivers"/>
            <x-admin-leiding tak="givers"/>
        </div>
    </div>
</x-app-layout>