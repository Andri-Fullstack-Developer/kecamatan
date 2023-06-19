<div class="container-fluid pt-4 px-4" style="overflow-x: auto;">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Home</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        @if ($jabatan == 'ketua umun lkmbi')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#home">
                Tambah Data
            </button>
        @endif
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>

                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                @if ($item->image)
                                    <img width="50px" src="{{ url('Image') . '/' . $item->image }}"
                                        alt="">
                                @endif
                            </td>
                            <td>{{ $item->image }}</td>
                            <td>
                                <a href="#" class="btn-sm btn-edit">
                                    <i class="fas fa-edit icon-edit"></i>
                                </a>
                                <Form action="/delete_home/{{ $item->id }}" method="POST" class="d-inline"
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
            {{ $users->links() }}
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="home" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-home') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="image">Foto</label>
                    <input class="model-in" name="image" type="file">
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
