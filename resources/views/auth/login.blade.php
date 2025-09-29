<x-guest-layout>
    <x-slot name="title">Masuk — {{ config('app.name') }}</x-slot>

    <div class="mb-6 text-center">
        <img src="{{ asset('logo.png') }}" alt="Logo" class="h-14 mx-auto">
        <h1 class="mt-3 text-2xl font-semibold">
            Selamat datang di {{ config('app.name') }}
        </h1>
        <p class="text-sm text-gray-500">Masuk untuk melanjutkan.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full"
                          type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember + Forgot -->
        <div class="flex items-center justify-between">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300">
                <span class="ms-2 text-sm">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Masuk') }}
        </x-primary-button>
    </form>
</x-guest-layout>
