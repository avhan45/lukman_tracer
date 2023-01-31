<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if(!empty($request->session()->has('nama'))){
            $nim = $request->session()->get('nim');
            $user = $request->session()->get('nama');
            $level = $request->session()->get('level');
        }else{
            return redirect('login');
        }

        if($level == 'admin'){
            return redirect()->to('home');
        }else{
            return redirect()->to('home_user');
        }
        $UserAlumni = User::All();
        return view('user.index', compact('user','UserAlumni','level','nim'));
    }

   
    public function create(Request $request)
    {
       if(!empty($request->session()->has('nama'))){
        $nim  = $request->session()->get('nim');
            $user = $request->session()->get('nama');
            $level = $request->session()->get('level');
        }else{
            return redirect('login');
        }

        return view('user.tambah', compact('user','level','nim'));
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
       if(!empty($request->session()->has('nama'))){
            $nim  = $request->session()->get('nim');
            $user = $request->session()->get('nama');
            $level = $request->session()->get('level');
        }else{
            return redirect('login');
        }

        $dataUser = User::find($id);
        return view('user.edit', compact('dataUser','user','level','nim'));
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
        return redirect()->back()->with('success', 'Data Berhasil Di Update');

    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('user')->with('warning', 'User Berhasil Di Hapus');
    }

    public function kuis(Request $request)
    {
        if(!empty($request->session()->has('nama'))){
            $nim  = $request->session()->get('nim');
            $user = $request->session()->get('nama');
            $level = $request->session()->get('level');
        }else{
            return redirect('login');
        }

        return view('user.kusioner',compact('user','level', 'nim'));
    }

    public function profile(Request $request,$id) 
    {
        if(!empty($request->session()->has('nama'))){
            $nim  = $request->session()->get('nim');
            $user = $request->session()->get('nama');
            $level = $request->session()->get('level');
        }else{
            return redirect('login');
        }
        $profile = User::where('nim', $nim)->first();
        return view('user.profile', compact('user','level', 'nim','profile'));
    }
}
