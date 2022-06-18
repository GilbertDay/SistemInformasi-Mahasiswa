@extends('layout.main')
@section('title','| Edit User')
@section('content')
<div class="card-body text-white">
    <div class="container-fluid rounded">
        <form action="/user/updateuser/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <label>NIM</label>
            <div class="form-group w-25">
                <input type="number" name="nim_user" value="{{ $user->nim_user }}" class="form-control" readonly>
            </div>
            <label>Nama</label>
            <div class="form-group w-25">
              <input type="text" name="nama_user" value="{{ $user->nama_user }}" class="form-control">
            </div>
            <label>No Handphone</label>
            <div class="form-group w-25">
              <input type="number" name="no_hp" value="{{ $user->no_hp }}" class="form-control">
            </div>
            <label>Role</label>
            <div class="form-group">
                <select class="form-select" name="role" id="validationCustom04" required>
                  <option selected disabled value="">Silahkan Pilih</option>
                  <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : ''}}>Admin</option>
                  <option value="User" {{ $user->role == 'User' ? 'selected' : ''}}>User</option>
                </select>
                <div class="invalid-feedback">
                  Data tidak boleh kosong
                </div>
            </div>
            <button type="submit" value="simpan" class="btn btn-outline-primary mt-4">Simpan</button>
            
        </form>
    </div>
</div>
@endsection