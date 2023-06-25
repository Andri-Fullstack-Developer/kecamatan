<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Pendaftaran EKTP</h1>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Nama</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ektp as $index => $e)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $e->nama }},{{ $e->id }}</td>
                            <td>{{ $e->tanggal_pendaftaran }}</td>
                            <td>{{ $e->alamat }}</td>
                            <td>
                                <button type="button" class="btn-sm" data-bs-toggle="modal" data-bs-target="#">
                                    <i class="fas fa-edit icon-edit"></i>
                                </button>
                                <a href="/tampil_ektp/{{ $e->id }}">
                                    <button type="submit" class="btn-sm" data-bs-toggle="modal" data-bs-target="#">
                                        <i class="fas fa-download icon-download"></i>
                                    </button>
                                </a>
                                <Form action="/delete_ektp/{{$e->id}}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin mengahus data')">
                                    @csrf
                                    {{-- <input type="hidden" name="img" value="/Images/{{ $item->image }}"> --}}
                                    <button type="submit" class="btn-sm">
                                        <i class="fas fa-trash icon-delete"></i>
                                    </button>
                                </Form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
