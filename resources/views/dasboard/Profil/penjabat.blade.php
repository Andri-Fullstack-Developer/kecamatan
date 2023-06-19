<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Profil Penjabat</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-penjabat">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Jabatan</th>
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
                            <td>
                                @if ($item->image)
                                    <img width="50px" src="{{ url('Image') . '/' . $item->image }}"
                                        alt="">
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>
                                <button type="button" class="btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#penjabat{{ $item->id }}">
                                    <i class="fas fa-edit icon-edit"></i>
                                </button>
                                {{-- edit --}}
                                <div class="modal fade" id="penjabat{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #000">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Desa</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/update-penjabat/{{ $item->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label class="model-la" for="nama">Masukan Nama</label>
                                                    <input class="model-in" value="{{ $item->nama }}" name="nama"
                                                        type="text">
                                                    <label class="model-la" for="jabtan">Masukan Jabatan</label>
                                                    <input class="model-in" value="{{ $item->jabatan }}" name="jabatan"
                                                        type="text">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><i
                                                                class="fa-solid fa-xmark"></i></button>
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa-solid fa-check"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <Form action="/delete_jabatan/{{ $item->id }}" method="POST" class="d-inline"
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


<!-- Modal Penjabat-->
<div class="modal fade" id="exampleModal-penjabat" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-penjabat') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="nama">Name</label>
                    <input class="model-in" type="text" name="nama" placeholder="Full Name">
                    <label class="model-la" for="penjabat">Jabatan</label>
                    <input class="model-in" type="text" name="penjabat" placeholder="Jabatan">
                    <label class="model-la" for="image">Foto</label>
                    <input class="model-in" name="image" type="file">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
