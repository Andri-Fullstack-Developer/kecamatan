<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Nama Desa</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nameDs">
            Tambah Data
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Desa</th>
                        <th>Jumplah Jiwa</th>
                        <th>Jumplah KK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @if ($ho->isNotEmpty())
                        @foreach ($ho as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td id="namaDs{{ $item->id }}">{{ $item->namaDs }}</td>
                                <td id="namaDs{{ $item->id }}">{{ $item->jph_jiwa }}</td>
                                <td id="namaDs{{ $item->id }}">{{ $item->jph_kk }}</td>
                                <td>
                                    <button type="button" class="btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#add{{ $item->id }}">
                                        <i class="fas fa-edit icon-edit"></i>
                                    </button>
                                    {{-- edit --}}
                                    <div class="modal fade" id="add{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="background: #000">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Desa</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="/update-desa/{{$item->id}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <label class="model-la" for="namaDs">Masukan Nama Desa</label>
                                                        <input class="model-in" value="{{$item->namaDs}}" name="namaDs" type="text">
                                                        <label class="model-la" for="jph_jiwa">Masukan Jumplah
                                                            Jiwa</label>
                                                        <input class="model-in" value="{{$item->jph_jiwa}}"  name="jph_jiwa" type="number">
                                                        <label class="model-la" for="jph_kk">Masukan Jumplah
                                                            KK</label>
                                                        <input class="model-in" value="{{$item->jph_kk}}" name="jph_kk" type="number">
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

                                    <Form action="/delete_desa/{{ $item->id }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin mengahus data')">
                                        @csrf
                                        <button type="submit" class="btn-sm">
                                            <i class="fas fa-trash icon-delete"></i>
                                        </button>
                                    </Form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="container mt-2">
                {{ $ho->links() }}
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="nameDs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Desa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('post-nameDs') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="namaDs">Masukan Nama Desa</label>
                    <input class="model-in" name="namaDs" type="text">
                    <label class="model-la" for="jph_jiwa">Masukan Jumplah Jiwa</label>
                    <input class="model-in" name="jph_jiwa" type="number">
                    <label class="model-la" for="jph_kk">Masukan Jumplah KK</label>
                    <input class="model-in" name="jph_kk" type="number">
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
<!-- Modal Edit-->
