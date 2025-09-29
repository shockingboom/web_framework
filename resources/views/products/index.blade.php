{{-- resources/views/products/index.blade.php --}}
@extends('layouts.app') {{-- ganti kalau layout kamu beda --}}

@section('content')
<div class="container mx-auto max-w-lg py-8">
    <h1 class="text-2xl font-semibold mb-4">Hasil Perhitungan</h1>

    <div class="p-4 rounded-lg border">
        <p>Angka dari route: <strong>{{ $original }}</strong></p>
        <p>Hasil (ditambah 7): <strong>{{ $value }}</strong></p>
    </div>
</div>
@endsection
