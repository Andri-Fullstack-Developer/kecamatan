<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Agenda</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agenda">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Hari</th>
                        <th>Hari/Tgl</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ho as $index => $item)
                        <tr>
                            <td>{{ $index + $ho->firstItem() }}</td>
                            <td>{{ substr($item->judul, 0, 20) }}...</td>
                            <td>{{ $item->hari }}</td>
                            <td>{{ $item->hariTgl }}</td>
                            <td>{{ $item->jam }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>
                                <button type="button" class="btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#agenda{{ $item->id }}">
                                    <i class="fas fa-edit icon-edit"></i>
                                </button>
                                {{-- edit --}}
                                <div class="modal fade" id="agenda{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #000">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Desa</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/update-agenda/{{ $item->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label class="model-la" for="judul">Masukan Nama Program</label>
                                                    <input class="model-in" value="{{ $item->judul }}" name="judul"
                                                        type="text">
                                                    <label class="model-la" for="">Hari</label>
                                                    <select class="model-se" name="hari">
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                    <label class="model-la" for="hariTgl">Masukan Nama Program</label>
                                                    <input class="model-in" value="{{ $item->hariTgl }}" name="hariTgl"
                                                        type="text">
                                                    <label class="model-la" for="lokasi">Masukan Nama Program</label>
                                                    <input class="model-in" value="{{ $item->lokasi }}" name="lokasi"
                                                        type="text">
                                                    <label class="model-la" for="jam">Masukan Nama Program</label>
                                                    <input class="model-in" value="{{ $item->jam }}" name="jam"
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

                                <Form action="/delete_agenda/{{ $item->id }}" method="POST" class="d-inline"
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
            <div class="container mt-2">
                {{ $ho->links() }}
            </div>
        </div>
    </div>
</div>


<!-- Modal Penjabat-->
<div class="modal fade" id="agenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-agenda') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="judul">Judul</label>
                    <input class="model-in" type="text" name="judul" placeholder="Masukan Judul">
                    <label class="model-la" for="">Hari</label>
                    <select class="model-se" name="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                    <label class="model-la" for="hariTgl">Hari/Tgl</label>
                    <input class="model-date" type="date" name="hariTgl">
                    <label class="model-la" for="jam">Jam</label>
                    <input class="model-time" type="time" name="jam">
                    <label class="model-la" for="lokasi">Lokasi</label>
                    <input class="model-in" type="text" name="lokasi" placeholder="Lokasi">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
