<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(){
        echo "Welcome";
    }

    public function store(Request $request){
        $alumni = new Alumni();
        $alumni->nama_lengkap = $request->nama_lengkap;
        $alumni->jk = $request->jk;
        $alumni->asal_smu = $request->asalsma;
        $alumni->kabupaten_smu = $request->kab_smu;
        $alumni->provinsi_smu = $request->prov_smu;
        $alumni->kode_pos_smu = $request->pos_smu;
        $alumni->tempat_lahir = $request->tempatLahir;
        $alumni->tgl_lahir = $request->tglLahir;
        $alumni->alamat_kantor = $request->alamatKantor;
        $alumni->no_telp_kantor = $request->telpkantor;
        $alumni->kode_pos_kantor = $request->kodekantor;
        $alumni->alamat_rumah = $request->alamatRumah;
        $alumni->kel = $request->kelurahan;
        $alumni->kec = $request->kecamatan;
        $alumni->kab = $request->kabupaten;
        $alumni->prov = $request->provinsi;
        $alumni->no_telp = $request->notelp;
        $alumni->email = $request->email;
        $alumni->thn_masuk = $request->thnmasuk;
        $alumni->bln_wisuda = $request->blnwisuda;
        $alumni->thn_wisuda = $request->thnwisuda;
        $alumni->prodi = $request->prodi;
        $alumni->nama_tempat_bekerja = $request->tmptkerja;
        $alumni->jenis_instansi = $request->jenistmptkerja;
        $alumni->jabatan = $request->jabatan;
        $alumni->bln_bekerja = $request->bulankerja;
        $alumni->thn_bekerja = $request->thnbekerja;
        $alumni->p1 = $request->p1;
        $alumni->p2 = $request->p2;
        $alumni->p3 = $request->p3;
        $alumni->p4 = $request->p4;
        $alumni->p5 = $request->p5;
        $alumni->p6 = $request->p6;
        $alumni->p7 = $request->p7;
        $alumni->p8 = $request->p8;
        $alumni->p9 = $request->p9;
        $alumni->p10 = $request->p10;


        
    //    dd($request->nama_lengkap);
        $simpan = $alumni->save();
        dd($simpan);die();
        // if($simpan){
        //     echo "Berhasil";
        // }else{
        //     echo "Gagal";
        // }
        
    }
}
