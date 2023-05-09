<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Visi & Misi</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#visimisi">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Visi</th>
                        <th>Misi</th>

                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($ho as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->visi }}</td>
                            <td>{{ $item->misi }}</td>
                            <td>
                                <a href="#" class="btn-sm btn-edit">
                                    <i class="fas fa-edit icon-edit"></i>
                                </a>
                                <Form action="/delete_visimisi/{{ $item->id }}" method="POST" class="d-inline"
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


<!-- Modal Penjabat-->
<div class="modal fade" id="visimisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Visi & Misi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-visi&misi') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="visi">Visi</label>
                    <textarea class="model-in" name="visi" cols="10" rows="6" name="agenda" placeholder="Masukkan diskripsi"></textarea>
                    <label class="model-la" for="misi">Misi</label>
                    <textarea class="model-in" name="misi" cols="10" rows="6" name="agenda" placeholder="Masukkan diskripsi"></textarea>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
