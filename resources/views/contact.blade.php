
<h1>Contact Page</h1>
<nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">About</a> |
    <a href="{{ route('contact') }}">Contact</a> |
    <a href="{{ route('dashboard') }}">Dashboard</a>
</nav>
<p>Halo, {{ $name }}! Ini halaman Contact.</p>