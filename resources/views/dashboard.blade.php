<h1>Dashboard (Admin)</h1>
<nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">About</a> |
    <a href="{{ route('contact') }}">Contact</a> |
    <a href="{{ route('dashboard') }}">Dashboard</a>
</nav>

@auth
    <p>Selamat datang, {{ auth()->user()->name ?? 'User' }}! Kamu berhasil login dan bisa melihat halaman ini.</p>
@else
    <p>Kamu belom login</p>
@endauth