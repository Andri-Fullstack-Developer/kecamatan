<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Video</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#video">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Video</th>
                        <th>Judul</th>
                        <th>Date Time</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($video as $no => $item)
                        <tr>
                            <td>{{ $no + $video->firstItem() }}</td>
                            <td>
                                {{ $item->video }}
                            </td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->dateTim }}</td>
                            <td>
                                <a href="#" class="btn-sm btn-edit">
                                    <i class="fas fa-edit icon-edit"></i>
                                </a>
                                <Form action="/delete_video/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin mengahus data')">
                                    @csrf
                                    <input type="hidden" name="video" value="/videos/{{ $item->video }}">
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
                {{ $video->links() }}
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-video') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="video">Video</label>
                    <input class="model-in" name="video" type="file">
                    <label class="model-la" for="judul">Judul</label>
                    <input class="model-in" type="text" name="judul" placeholder="judul">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i></button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
