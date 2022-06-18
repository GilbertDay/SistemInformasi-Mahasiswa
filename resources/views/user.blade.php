@extends('layout.main')
@section('title','| Data User')
@section('content')
<div class="row">
    <div class="col">
        <div class="card py-2" style="background-color:rgb(27, 18, 41)">
            <div class="card-header" style="background-color:rgb(63, 45, 93)">
                <a name="" id=""  class="btn btn-outline-primary float-right" href="/user/formuser" role="button"><i class="bi bi-person-plus-fill"></i>Tambah</a>
                <form class="input-group w-50 float-left" method="GET" action="/user/cari">
                  <span class="input-group-text bg-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg>
                  </span>
                  <input type="text" name= "cari" class="form-control bg-dark text-white ml-1" placeholder="Cari" aria-label="Search" style="max-width: 50%">
                </form>
            </div>

            <div class="card-body" style="background-color:rgb(107, 83, 144)"">
                <table class="table">
                    <thead class="thead-dark text-center">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="text-center text-white">
                      @foreach ($user as $no => $u)
                      <tr>
                        <th scope="row">{{ $user->firstItem() + $no }}</th>
                        <td>{{ $u->nim_user}}</td>
                        <td>{{ $u->nama_user}}</td>
                        <td>{{ $u->no_hp}}</td>
                        <td>{{ $u->role}}</td>
                        <td>
                          <div class="btn-group dropleft">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a class="dropdown-item" href="/user/edituser/{{ $u -> id}}" type="button" style="word-spacing:50px">
                                Edit <i class="bi bi-pencil-square"></i>
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/user/hapususer/{{ $u -> id}}" type="button"
                                onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                Hapus <i class="bi bi-trash"></i>
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <span class="float-right">{{ $user->links() }}</span>
            </div>
        </div>
    </div>
</div>
@endsection