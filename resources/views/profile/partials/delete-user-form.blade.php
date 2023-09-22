<section class="mb-32">
    <header>
        <h3>
            {{ __('Verwijder huidig account') }}
        </h3>

        <p>
            {{ __('Wanneer je je account verwijderd, zal je niet meer opnieuw kunnen inloggen.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Verwijder account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Ben je zeker dat je je account wil verwijderen?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Wanneer je je account verwijderd, zal je niet meer opnieuw kunnen inloggen. Voeg je wachtwoord in om te bevestigen.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Wachtwoord') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Wachtwoord') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Verwijder je account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
