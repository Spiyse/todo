<x-layout>
    <x-slot:title>Rediģēt dienasgrāmatas ierakstu</x-slot:title>
    <h1>Rediģēt dienasgrāmatas ierakstu</h1>

    <form method="POST" action="/diaries/{{ $diary->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Virsraksts</label>
            <input id="title" name="title" type="text" value="{{ old('title', $diary->title) }}" required>
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="body">Saturs</label>
            <textarea id="body" name="body" rows="6" required>{{ old('body', $diary->body) }}</textarea>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="date">Datums</label>
            <input id="date" name="date" type="date" value="{{ old('date', $diary->date) }}" required>
            @error('date')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button>Saglabāt izmaiņas</button>
    </form>
</x-layout>
