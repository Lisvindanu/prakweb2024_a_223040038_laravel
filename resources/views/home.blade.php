<x-layout>
    @isset($nama)
        {{$nama}}
    @endisset
    <x-slot:tittle>{{$tittle}}</x-slot:tittle>
    <h3 class="text-xl">
        ini adalah halaman home page

    </h3>
</x-layout>
