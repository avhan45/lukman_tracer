<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('nama')){
            $user = $request->session()->get('nama');
        }
        $UserAlumni = User::All();
        return view('user.index', compact('user','UserAlumni'));
    }

    public function create(Request $request)
    {
        if($request->session()->has('user')){
            $user = $request->session()->get('user');
        }
        return view('user.tambah', compact('user'));
    }

    public function store(Request $request)
    {
        $nim    = $request->post('nim');
        $nama   = $request->post('nama');
        $email  = $request->post('email');
        $pass   = $request->post('password');
        // Validasi
        $validated = $request->validate([
            'nim' => 'required|unique:users',
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ],
        [
            'nim.required' => 'Nim Tidak Boleh Kosong',
            'nim.unique' => 'Nim Sudah Terdaftar',
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
        ]);

        $user = User::insert([
            'nim' => $nim,
            'username' => $nama,
            'email' => $email,
            'password' => $pass
        ]);

        return redirect()->to('user')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edit(Request $request, $id)
    {
        if($request->session()->has('nama')){
            $user = $request->session()->get('nama');
        }
        $dataUser = User::find($id);
        return view('user.edit', compact('dataUser','user'));
    }

    public function update(Request $request,$id)
    {
        $nama   = $request->post('nama');
        $email = $request->post('email');
        $pass   = $request->post('password');

        $user = User::find($id);
        
        if($pass == ''){
            $user->update([
                'nim'   => $user->nim,
                'username' => $nama,
                'email' => $email,
                'password' => $user->password
            ]);
        }else{
            $validated = $request->validate([
                'nama' => 'required',
                'password' => 'min:3'
            ],
            [
                'nama.required' => 'Nama Tidak Boleh Kosong',
                'password.min' => 'Password Minimal 3 Karakter',
            ]);
            $user->update([
                'nim'   => $user->nim,
                'username' => $nama,
                'email' => $email,
                'password' => $pass
            ]);
        }
        return redirect()->to('user')->with('success', 'Data Berhasil Di Update');

    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('user')->with('warning', 'User Berhasil Di Hapus');
    }
}
