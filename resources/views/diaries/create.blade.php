<x-layout>
    <x-slot:title>Izveidot dienasgrāmatas ierakstu</x-slot:title>
    <h1>Izveidot dienasgrāmatas ierakstu</h1>

    <form method="POST" action="/diaries">
        @csrf

        <div>
            <label for="title">Virsraksts</label>
            <input id="title" name="title" type="text" value="{{ old('title') }}" required>
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="body">Saturs</label>
            <textarea id="body" name="body" rows="6" required>{{ old('body') }}</textarea>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="date">Datums</label>
            <input id="date" name="date" type="date" value="{{ old('date') }}" required>
            @error('date')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button>Saglabāt</button>
    </form>
</x-layout>
