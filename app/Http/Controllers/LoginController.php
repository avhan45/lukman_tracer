<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(Request $request)
    {
        if ($request->session()->has('nama')) {
            // $user = $request->session()->get('user');
            return redirect()->to('home');
        }
        return view('login');
    }

    public function proses(Request $request)
    {
        $nim = $request->get('nim');
        $pass = $request->get('password');

        if (empty($nim) || empty($pass)) {
            return back()->with('error', 'NIM dan Password Tidak Boleh Kosong');
        }

        $user = User::where(function ($query) use ($nim) {
            $query->where('nim', $nim)
                ->orWhere('username', $nim);
        })->first();

        if (empty($user)) {
            return back()->with('error', 'User Tidak Ditemukan atau Password Salah');
        }

        // The user exists, so now check the password
        if ($pass === $user->password) {
            // Password matches
            $request->session()->put('id', $user->id);
            $request->session()->put('nim', $user->nim);
            $request->session()->put('nama', $user->username);
            $request->session()->put('email', $user->email);
            $request->session()->put('level', $user->level);

            return redirect('home');
        } else {
            // Password is incorrect
            return back()->with('error', 'User Tidak Ditemukan atau Password Salah');
        }
    }



    public function logout(Request $request)
    {
        $request->session()->forget('nama');
        return redirect('/');
    }
}
