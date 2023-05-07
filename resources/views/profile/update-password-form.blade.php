<x-form-section submit="updatePassword">
    <x-slot name="title">
        <div class="text-gray-900">
            {{ __('Modifier le mot de passe') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="text-gray-800">
            {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester en sécurité. ') }}
        </div>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Mot de passe actuel') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Nouveau mot de passe') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirmer le nouveau mot de passe') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Enregistrement...') }}
        </x-action-message>

        <x-button class="bg-green-600 hover:bg-green-800">
            {{ __('Enregistrer') }}
        </x-button>
    </x-slot>
</x-form-section>
