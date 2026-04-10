
<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildits: {{ $todo->completed ? "Ja" : "Ne" }}</p>
    <p>{{ $todo->date }}</p>
    <p><a href="/todos/{{ $todo->id }}/edit">Rediget ierakstu</a></p>
    <p><a href="/todos">Atpakal uz sarakstu</a></p>
</x-layout>
