<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <div class="flex items-stretch justify-between ...">
                    <div class=""><x-label for="password" value="{{ __('Mot de passe') }}" /></div>
                    <div class="ml-40">
                      @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">{{ __('Mot de passe oublié?') }}</a>
                      @endif  </div>
                </div>
                
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souviendre de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ __('Se connecter') }}
                </x-button>
            </div>
        </form>
        <p class="mt-10 text-center text-sm text-gray-500">
            Vous n’avez pas de compte ? 
            <a href="{{ route('register') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Inscrivez-vous</a>
          </p>
    </x-authentication-card>
</x-guest-layout>