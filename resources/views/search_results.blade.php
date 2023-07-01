@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hasil Pencarian</h1>

        @foreach ($results as $tableName => $items)
            <h2>{{ $tableName }}</h2>
            <ul>
                @foreach ($items as $item)
                    <li>{{ $item->judul }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>
@endsection
