<x-layout>
    <x-slot:title>Rediget uzdevumu</x-slot:title>
    <h1>Rediget uzdevumu</h1>

    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')

        <label>
            Uzdevuma saturs
            <input name="content" type="text" value="{{ old('content', $todo->content) }}" required />
        </label>

        @error("content")
        <p>{{ $message }}</p>
        @enderror

        <label>
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }} />
            Izpildits
        </label>

        @error("completed")
        <p>{{ $message }}</p>
        @enderror

        <button type="submit">Saglabat izmainas</button>
    </form>
</x-layout>
