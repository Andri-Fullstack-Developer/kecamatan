<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Berita</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#berita">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Img</th>
                        <th>Judul</th>
                        <th>Informasi</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ho as $index=> $item)
                        <tr>
                            <td>{{ $index + $ho->firstItem() }}</td>
                            <td>
                                @if ($item->image)
                                    <img width="50px" src="{{ url('storage/Images') . '/' . $item->image }}"
                                        alt="">
                                @endif
                            </td>
                            <td>{{ substr($item->judul, 0, 20) }}</td>
                            <td>{{ substr($item->informasi, 0, 40) }}...</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <button type="button" class="btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#berita{{ $item->id }}">
                                    <i class="fas fa-edit icon-edit"></i>
                                </button>
                                {{-- edit --}}
                                <div class="modal fade" id="berita{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #000">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Desa</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/update-berita/{{ $item->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label class="model-la" for="judul">Masukan Judul</label>
                                                    <input class="model-in" value="{{ $item->judul }}" name="judul"
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
                                <Form action="/delete_berita/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin mengahus data')">
                                    @csrf
                                    <input type="hidden" name="img" value="/Images/{{ $item->image }}">
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

<!-- Modal berita-->
<div class="modal fade" id="berita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-berita') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="judul">Judul</label>
                    <input class="model-in" type="text" name="judul" placeholder="Masukan Judul Berita">
                    <label class="model-la" for="image">Foto</label>
                    <input class="model-in" name="image" type="file">
                    <label class="model-la" for="informasi">Informasi</label>
                    <textarea class="model-in" name="informasi" cols="10" rows="6" placeholder="Masukkan diskripsi"></textarea>
                    {{-- <textarea  class="model-in" type="text" name="agenda" placeholder="Masukkan diskripsi"> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
