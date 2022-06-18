<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\User;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::orderBy('id','desc')->paginate(10);
        return view('user', ['user' => $user], ['title'=>'User']);
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('nama_user', 'like', '%'.$cari.'%')->paginate(5);
        return view('user', ['user' => $user], ['title'=>'User']);
    }

    public function formuser()
    {
        return view('formTambahUser', ['title'=>'User']);
    }

    public function simpanuser(Request $request){
        $validateData = $request->validate([
            'nim_user' => 'required|min:8',
            'password' => 'required|min:6'
        ]);

        User::create([
            'nim_user' => $request->nim_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        
        return redirect("/user")->with('alert-tambah','Data Berhasil ditambahkan');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('formEdituser', ['user'=> $user], ['title'=>'User']);
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user -> nim_user = $request->nim_user;
        $user -> nama_user = $request->nama_user;
        $user -> no_hp = $request->no_hp;
        $user -> role = $request->role;
        $user->save();
        return redirect('/user')->with('alert-update','Data Berhasil diubah');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert-hapus','Data Berhasil dihapus');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if(Auth::attempt(['no_hp'=> $request->no_hp, 'password' => $request->password]))
        {
            return redirect('/mahasiswa');
        }
        else
        {
            return redirect('/login');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alert-logout','Anda Telah Logout');
    }
}
