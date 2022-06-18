<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::orderBy('id','desc')->paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['title'=>'Mahasiswa']);
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nim', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['title'=>'Mahasiswa']);
    }

    public function formmahasiswa()
    {
        return view('formTambahMahasiswa', ['title'=>'Mahasiswa']);
    }

    public function simpanmahasiswa(Request $request){
        $minat = implode(", ", $_POST['minat']);
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $minat
        ]);
        
        return redirect("/mahasiswa")->with('alert-tambah','Data Berhasil ditambahkan');
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('formEditmahasiswa', ['mhs'=> $mahasiswa], ['title'=>'Mahasiswa']);
    }

    public function updatemahasiswa($id, Request $request)
    {
        $minat = implode(', ' , $_POST['minat']);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $request->nim;
        $mahasiswa -> nama = $request->nama;
        $mahasiswa -> gender = $request->gender;
        $mahasiswa -> jurusan = $request->jurusan;
        $mahasiswa -> bidang_minat = $minat;
        $mahasiswa->save();            
        return redirect('/mahasiswa')->with('alert-update','Data Berhasil diubah');
    }

    public function hapusmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alert-hapus','Data Berhasil dihapus');
    }
}
