<div class="modal fade" id="edit_nameDs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #000">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Desa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                @foreach ($edit_desa as $des)
                <form method="POST" action="{{ route('update.desa') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="model-la" for="namaDs">Masukan Nama Desa</label>
                    <input class="model-in" value="{{ $des->nameDs }}" name="namaDs" type="hidden">
                    <label class="model-la" for="jph_jiwa">Masukan Jumplah Jiwa</label>
                    <input class="model-in" value="{{ [$des->jph_jiwa] }}" name="jph_jiwa" type="number">
                    <label class="model-la" for="jph_kk">Masukan Jumplah KK</label>
                    <input class="model-in" value="{{ $des->jph_kk }}" name="jph_kk" type="number">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i></button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i></button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
