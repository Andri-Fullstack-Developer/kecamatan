<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Profil Penjabat</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <div class="row mt-3">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelapor</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($ho as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->namape }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->usia }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>
                                <a href="#" class="btn-sm btn-edit" onclick="showError(event)">
                                    <i class="fas fa-edit icon-edit"></i>
                                </a>
                                <Form action="/delete_pengaduan/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin mengahus data')">
                                    @csrf
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
<script>
    function showError(event) {
        event.preventDefault();
        swal({
            icon: "error",
            title: "Terjadi Kesalahan",
            text: "Maaf data tidak bisa di edit",
        });
    }
</script>