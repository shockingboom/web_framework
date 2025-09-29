<x-app-layout>
    <x-slot name="title">Dashboard — {{ config('app.name') }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <p>Halo, {{ Auth::user()->name }}.</p>
        <p>Role Anda adalah '<strong>{{ Auth::user()->role }}</strong>'.</p>
    </div>
</x-app-layout>
