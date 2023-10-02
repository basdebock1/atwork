<x-app-layout>
    <h1 class="intro__title" style="margin: 1rem">Admin</h1>
    <section class="introduction">
        <x-post :post="$post" />
        <x-post-form style="width:100%;" />
    </section>
</x-app-layout>
