<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Tambah User</h1>
        @if (session('success'))
            <div class="alert alert-black text-white-50">
                {{ session('success') }}
            </div>
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#users">
            Tambah Users
        </button>
        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                      
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($ho as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->jabatan }}</td>
                           
                            <td>
                                <a href="#" class="btn-sm btn-edit">
                                    <i class="fas fa-edit icon-edit"></i>
                                </a>
                                <a type="submit" class="btn-sm">
                                    <i class="fas fa-trash icon-delete"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="users" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content" style="background: #000">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ url('post-singup') }}" enctype="multipart/form-data">
                  @csrf
                  <label class="model-la" for="name">Name</label>
                  <input class="model-in" name="name" type="text">
                  <label class="model-la" for="username">Username</label>
                  <input class="model-in" name="username" type="text">
                  <label class="model-la" for="email">Email</label>
                  <input class="model-in" name="email" type="email">
                  <label class="model-la" for="jabatan">Jabatan</label>
                  <input class="model-in" name="jabatan" type="text">
                  <label class="model-la" for="password">Password</label>
                  <input class="model-in" name="password" type="password">
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary"
                          data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
          </div>

      </div>
  </div>
</div>