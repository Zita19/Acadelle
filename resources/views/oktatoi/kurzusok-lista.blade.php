@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Kurzusok listája</h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Név</th>
                <th>Helyszín</th>
                <th>Képzés ideje</th>
                <th>Díj</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kurzusok as $kurzus)
                <tr>
                    <td>{{ $kurzus->kurzus_nev }}</td>
                    <td>{{ $kurzus->helyszin }}</td>
                    <td>{{ $kurzus->kepzes_ideje }}</td>
                    <td>{{ $kurzus->dij ? $kurzus->dij . ' Ft' : 'Ingyenes' }}</td>
                    <td>
                        <a href="{{ route('kurzusok.show', $kurzus->id) }}" class="btn btn-info btn-sm">Megtekintés</a>
                        <a href="{{ route('kurzusok.edit', $kurzus->id) }}" class="btn btn-warning btn-sm">Szerkesztés</a>
                        <form action="{{ route('kurzusok.destroy', $kurzus->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Biztosan törölni szeretnéd?')">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
