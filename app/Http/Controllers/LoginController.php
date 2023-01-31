<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(Request $request) {
        if($request->session()->has('nama')){
            // $user = $request->session()->get('user');
            return redirect()->to('home');
        }
        return view('login');
    }

    public function proses(Request $request){
        $nim = $request->get('nim');
        $pass = $request->get('password');

        
        if(empty($nim) || empty($pass)){
            return back()->with('error', 'Nim dan Password Tidak Boleh Kosong');
            return;
        }else{
            $user = User::where('nim', $nim)
            ->orWhere('username', $nim)
            ->where('password', $pass)
            ->first();

            if(empty($user)){
                return back()->with('error', 'User TIdak Ditemukan');
                return;
            }else{
                if($user->level == "admin"){
                    $nama = $user->username;
                    $request->session()->put('nama', $nama);
                    $request->session()->put('level', $user->level);
                    return redirect('home');
                }else{
                    $nama = $user->username;
                    // $request->session()->put('user', $nim);
                    $request->session()->put('nim', $user->nim);
                    $request->session()->put('nama', $nama);
                    $request->session()->put('level', $user->level);
                    return redirect('home');
                }
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('nama');
        return redirect('/');
    }
}
