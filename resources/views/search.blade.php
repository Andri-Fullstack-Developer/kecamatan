<h1>Hasil Pencarian</h1>

@foreach ($results as $tableName => $items)
    <h2>{{ $tableName }}</h2>
    <ul>
        @foreach ($items as $item)
            @if ($tableName === 'Agenda')
                <li>{{ $item->judul }}</li>
            @elseif ($tableName === 'Berita')
                <li>{{ $item->judul }}</li>
            @elseif ($tableName === 'Camat')
                <li>{{ $item->Nama_Camat }}</li>
            @elseif ($tableName === 'Foto')
                <li>{{ $item->judul }}</li>
         
            @elseif ($tableName === 'Jabatan')
                <li>{{ $item->nama }}</li>
         
            @elseif ($tableName === 'Organisasi')
                <li>{{ $item->nama }}</li>
         
            @elseif ($tableName === 'Namadesa')
                <li>{{ $item->namaDs }}</li>
         
            @endif
        @endforeach
    </ul>
@endforeach

