<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('user')){
            $user = $request->session()->get('user');
        }
        $alumni = Alumni::all();
        return view('pengguna.index',compact('alumni', 'user'));
    }
}
