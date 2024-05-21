{{-- {{ dd($title) }} --}}
{{--  dd = dump and die atau var_dump di php
    "tampilkan variabel lalu matikan scriptnya"
    buat ngelakuin debug

    $title didapetin dari routes/web.php
    kalo dijalanin langsung di layout gabisa, karena $title cuma ada di route home, makanya 
    dibuat x-slot buat ngakalin ke layout
    --}}
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">ma Home Page</h3>
</x-layout>