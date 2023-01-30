<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
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
                return redirect('home');
            }
        }
    }
}
