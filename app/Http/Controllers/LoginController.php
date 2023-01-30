<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index() {
        return view('login');
    }

    public function proses(Request $request){
        $nim = $request->get('nim');
        $pass = $request->get('password');

        
        if(empty($nim) || empty($pass)){
            return back()->with('error', 'Nim dan Password Tidak Boleh Kosong');
            return;
        }else{
            $user = User::where('nim', $nim)->where('password', $pass)->first();

            if(empty($user)){
                return back()->with('error', 'User TIdak Ditemukan');
                return;
            }else{
                $request->session()->put('user', $nim);
                
                // dd($request->session()->get('user'));
                return redirect('home');
            }
        }
    }
}
