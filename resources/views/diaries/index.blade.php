
<x-layout>
    <h1>Dienasgramatas ieraksti</h1>
    <p><a href="/diaries/create">Izveidot jaunu ierakstu</a></p>
    <ul>
        @foreach ($diaries as $diary)
            <li>
                <a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a>
                <a href="/diaries/{{ $diary->id }}/edit">Rediģēt</a>
            </li>
        @endforeach
    </ul>
</x-layout>