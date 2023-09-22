<x-app-layout>
    <h2>Jouw profiel</h2>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid-cols-1 ">
            @include('profile.partials.update-profile-information-form')
            @include('profile.partials.update-password-form')
            @include('profile.partials.add-admin-form')
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
