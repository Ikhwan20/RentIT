<x-app-layout>
    @foreach($utility as $util)
    {{ $util->id }}
    @endforeach
</x-app-layout>