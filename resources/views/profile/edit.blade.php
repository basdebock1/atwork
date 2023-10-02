<x-app-layout>
    <div class="admin">
        <h2>Jouw profiel</h2>
        @include('profile.partials.update-profile-information-form')
        @include('profile.partials.update-password-form')
        @include('profile.partials.add-admin-form')
        @include('profile.partials.delete-user-form')
    </div>
</x-app-layout>
