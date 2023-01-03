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
        $alumni->p2_1 = $request->p2_1;
        $alumni->p2_2 = $request->p2_2;
        $alumni->p2_3 = $request->p2_3;
        $alumni->p2_4 = $request->p2_4;
        $alumni->p2_5 = $request->p2_5;
        $alumni->p3 = $request->p3;
        $alumni->p4 = $request->p4;
        $alumni->p5 = $request->p5;
        $alumni->p6 = $request->p6;
        $alumni->p7 = $request->p7;
        $alumni->p8 = $request->p8;
        $alumni->p9 = $request->p9;
        $alumni->p9_1 = $request->p9_1;
        $alumni->p10 = $request->p10;
        $alumni->peng_kelas = $request->peng_1;
        $alumni->peng_lab = $request->peng_2;
        $alumni->peng_masyarakat = $request->peng_3;
        $alumni->peng_perusahaan = $request->peng_4;
        $alumni->peng_organisasi = $request->peng_5;
        $alumni->peng_kampus = $request->peng_6;
        $alumni->peng_mandiri = $request->peng_7;
        $alumni->ind_1 = $request->ind_1;
        $alumni->ind_2 = $request->ind_2;
        $alumni->ind_3 = $request->ind_3;
        $alumni->ind_3_1 = $request->ind_3_1;
        $alumni->ind_3_2 = $request->ind_3_2;
        $alumni->ind_3_3 = $request->ind_3_3;
        $alumni->ind_3_4 = $request->ind_3_4;
        $alumni->ind_3_5 = $request->ind_3_5;
        $alumni->ind_3_6 = $request->ind_3_6;
        $alumni->ind_3_7 = $request->ind_3_7;
        $alumni->ind_3_8 = $request->ind_3_8;
        $alumni->ind_3_9 = $request->ind_3_9;
        $alumni->ind_3_10 = $request->ind_3_10;
        $alumni->ind_3_11 = $request->ind_3_11;
        $alumni->ind_4 = $request->ind_4;
        $alumni->ind_4_1 = $request->ind_4_1;
        $alumni->ind_4_2 = $request->ind_4_2;
        $alumni->ind_4_3 = $request->ind_4_3;
        $alumni->ind_4_4 = $request->ind_4_4;
        $alumni->ind_4_5 = $request->ind_4_5;
        $alumni->ind_4_6 = $request->ind_4_6;
        $alumni->ind_4_7 = $request->ind_4_7;
        $alumni->ind_4_8 = $request->ind_4_8;
        $alumni->ind_4_9 = $request->ind_4_9;
        $alumni->ind_4_10 = $request->ind_4_10;
        $alumni->ind_4_11 = $request->ind_4_11;
        $simpan = $alumni->save();
        
    }
}
