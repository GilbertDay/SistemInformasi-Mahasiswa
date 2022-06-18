@extends('layout.main')
@section('title','| Tambah User')
@section('content')
<di class="card-body text-white">
        <form action="/user/simpanuser" method="POST">
            @csrf
            <label>NIM</label>
            <div class="form-group w-25">
                <input type="number" name="nim_user" class="form-control" placeholder="Masukkan 8 digit Angka">
            </div>
            <label>Nama</label>
            <div class="form-group w-25">
              <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama">
            </div>
            <label>No Handphone</label>
            <div class="form-group w-25">
              <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Handphone">
            </div>
            <label>Role</label>
            <div class="form-group">
                <select class="form-select" name="role" id="validationCustom04" required>
                  <option selected disabled value="">Silahkan Pilih</option>
                  <option>Admin</option>
                  <option>User</option>
                </select>
                <div class="invalid-feedback">
                  Data tidak boleh kosong
                </div>
            </div>
            <label>Password</label>
            <div class="form-group w-25">
                <input type="password" name="password" class="form-control" placeholder="Massukan Password" required>
            </div>
            <button type="submit" value="simpan" class="btn btn-outline-primary mt-4">Simpan</button>
            
        </form>
</div>
@endsection