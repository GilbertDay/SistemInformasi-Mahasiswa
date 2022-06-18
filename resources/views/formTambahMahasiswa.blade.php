@extends('layout.main')
@section('title','| Tambah Mahasiswa')
@section('content')
<div class="card-body text-white">
    <div class="container-fluid rounded">
        <form action="/mahasiswa/simpanmahasiswa" method="POST">
            @csrf
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukkan 8 digit Angka">
            </div>
            <div class="form-group w-25">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <label>Gender</label>
            <div class="form-check">
                <input class="form-check-input" value="Pria" type="radio" name="gender" id="pria" checked>
                <label class="form-check-label" for="pria">
                  Pria
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" value="Wanita" type="radio" name="gender" id="wanita">
                <label class="form-check-label" for="wanita">
                  Wanita
                </label>
            </div>
            <label>Jurusan</label>
            <div class="form-group">
                <select class="form-select" name="jurusan" id="validationCustom04" required>
                  <option selected disabled value="">Silahkan Pilih</option>
                  <option>Sistem Informasi</option>
                  <option>Teknik Informatika</option>
                  <option>Akutansi</option>
                </select>
                <div class="invalid-feedback">
                  Data tidak boleh kosong
                </div>
            </div>
            
            <label class="mb-3">Bidang Minat</label><br>
            <div class="form-group ml-4">
                <div class="">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="C++">
                  <label class="form-check-label">C++</label>
                </div>    

                <div class="">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="Java">
                  <label class="form-check-label">Java</label>
                </div>

                <div class="div">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="Phyton">
                  <label class="form-check-label">Phyton</label>
                </div>

                <div class="div">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="Laravel">
                  <label class="form-check-label">Laravel</label>
                </div>
            </div>
            <button type="submit" value="simpan" class="btn btn-outline-primary mt-4">Simpan</button>
            
        </form>
    </div>
</div>
@endsection