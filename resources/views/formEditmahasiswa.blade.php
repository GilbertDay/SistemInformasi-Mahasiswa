@extends('layout.main')
@section('title','| Edit Mahasiswa')
@section('content')
<div class="card-body text-white">
    <div class="container-fluid rounded">
        <form action="/mahasiswa/updatemahasiswa/{{ $mhs->id }}" method="POST">
            @csrf
            @method('PUT')
            @php
                $minat = explode(', ', $mhs -> bidang_minat);
            @endphp
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" value="{{ $mhs->nim }}" name="nim" class="form-control" readonly>
            </div>
            <div class="form-group w-25">
              <label>Nama</label>
              <input type="text" value="{{ $mhs->nama }}" name="nama" class="form-control">
            </div>
            <label>Gender</label>
            <div class="form-check">
                <input class="form-check-input" value="Laki-Laki" {{ $mhs -> gender == 'Laki-Laki' ? 'checked' : ''}} type="radio"
                name="gender" id="pria" checked>
                <label class="form-check-label" for="pria">
                  Laki-Laki
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" value="Wanita" {{ $mhs -> gender == 'Wanita' ? 'checked' : ''}} type="radio"
                name="gender" id="wanita">
                <label class="form-check-label" for="wanita">
                  Wanita
                </label>
            </div>
            <label>Jurusan</label>
            <div class="form-group">
                <select class="form-select" name="jurusan" id="validationCustom04" required>
                  <option selected disabled value="">Silahkan Pilih</option>
                  <option value="Sistem Infromasi" {{ $mhs->jurusan == 'Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                  <option value="Informatika" {{ $mhs->jurusan == 'Informatika' ? 'selected' : ''}}>Informatika</option>
                  <option value="Akutansi" {{ $mhs->jurusan == 'Akutansi' ? 'selected' : ''}}>Akutansi</option>
                  <option value="Dokter" {{ $mhs->jurusan == 'Dokter' ? 'selected' : ''}}>Dokter</option>
                  <option value="Biotek" {{ $mhs->jurusan == 'Biotek' ? 'selected' : ''}}>Biotek</option>
                </select>
                <div class="invalid-feedback">
                  Data tidak boleh kosong
                </div>
            </div>
            
            <label class="mb-3">Bidang Minat</label><br>
            <div class="form-group ml-4">
                <div class="">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="C++"
                  {{ in_array('C++', $minat) ? 'checked' : ''}}>
                  <label class="form-check-label">C++</label>
                </div>    

                <div class="">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="Java"
                  {{ in_array('Java', $minat) ? 'checked' : ''}}>
                  <label class="form-check-label">Java</label>
                </div>

                <div class="div">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="Phyton"
                  {{ in_array('Phyton', $minat) ? 'checked' : ''}}>
                  <label class="form-check-label">Phyton</label>
                </div>

                <div class="div">
                  <input type="checkbox" name="minat[]" class="form-check-input" value="Laravel"
                  {{ in_array('Laravel', $minat) ? 'checked' : ''}}>
                  <label class="form-check-label">Laravel</label>
                </div>
            </div>
            <button type="submit" value="simpan" class="btn btn-outline-primary mt-4">Simpan</button>
            
        </form>
    </div>
</div>
@endsection