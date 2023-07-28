<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        if (!empty($request->session()->has('id'))) {
            $nim  = $request->session()->get('nim');
            $user = $request->session()->get('id');
            $level = $request->session()->get('level');
        } else {
            return redirect('login');
        }

        $jumlah = User::count();
        $jumlahQs = Alumni::count();
        $alumni = Alumni::where('id', $user)->first();
        return view('dashboard', compact('user', 'jumlah', 'jumlahQs', 'level', 'nim', 'alumni'));
    }

    public function alumni(Request $request)
    {
        if (!empty($request->session()->has('id'))) {
            $nim  = $request->session()->get('nim');
            $user = $request->session()->get('nama');
            $level = $request->session()->get('level');
        } else {
            return redirect('login');
        }
        $alumni = Alumni::all();
        // dd($alumni);

        return view('alumni.index', compact('alumni', 'user', 'level', 'nim'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->peng_kelas);
        $alumni = Alumni::find($id);
        $alumni->update([
            'users_id' => session()->get('id'),
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'asal_smu' => $request->asalsma,
            'kabupaten_smu' => $request->kab_smu,
            'provinsi_smu' => $request->prov_smu,
            'kode_pos_smu' => $request->pos_smu,
            'tempat_lahir' => $request->tempatLahir,
            'tgl_lahir' => $request->tglLahir,
            'alamat_kantor' => $request->alamatKantor,
            'no_telp_kantor' => $request->telpkantor,
            'kode_pos_kantor' => $request->kodekantor,
            'alamat_rumah' => $request->alamatRumah,
            'kel' => $request->kelurahan,
            'kec' => $request->kecamatan,
            'kab' => $request->kabupaten,
            'prov' => $request->provinsi,
            'no_telp' => $request->notelp,
            'email' => $request->email,
            'thn_masuk' => $request->thnmasuk,
            'bln_wisuda' => $request->blnwisuda,
            'thn_wisuda' => $request->thnwisuda,
            'prodi' => $request->prodi,
            'nama_tempat_bekerja' => $request->tmptkerja,
            'jenis_instansi' => $request->jenistmptkerja,
            'jabatan' => $request->jabatan,
            'bln_bekerja' => $request->bulankerja,
            'thn_bekerja' => $request->thnbekerja,
            'p1' => $request->p1,
            'p2' => $request->p2,
            'p2_1' => $request->p2_1,
            'p2_2' => $request->p2_2,
            'p2_3' => $request->p2_3,
            'p2_4' => $request->p2_4,
            'p2_5' => $request->p2_5,
            'p3' => $request->p3,
            'p4' => $request->p4,
            'p5' => $request->p5,
            'p6' => $request->p6,
            'p7' => $request->p7,
            'p8' => $request->p8,
            'p9' => $request->p9,
            'p9_1' => $request->p9_1,
            'p10' => $request->p10,
            'peng_kelas' => $request->peng_kelas,
            'peng_lab' => $request->peng_lab,
            'peng_masyarakat' => $request->peng_masyarakat,
            'peng_perusahaan' => $request->peng_perusahaan,
            'peng_organisasi' => $request->peng_organisasi,
            'peng_kampus' => $request->peng_kampus,
            'peng_mandiri' => $request->peng_mandiri,
            'ind_1' => $request->ind_1,
            'ind_2' => $request->ind_2,
            'ind_3' => $request->ind_3,
            'ind_3_1' => $request->ind_3_1,
            'ind_3_2' => $request->ind_3_2,
            'ind_3_3' => $request->ind_3_3,
            'ind_3_4' => $request->ind_3_4,
            'ind_3_5' => $request->ind_3_5,
            'ind_3_6' => $request->ind_3_6,
            'ind_3_7' => $request->ind_3_7,
            'ind_3_8' => $request->ind_3_8,
            'ind_3_9' => $request->ind_3_9,
            'ind_3_10' => $request->ind_3_10,
            'ind_3_11' => $request->ind_3_11,
            'ind_4' => $request->ind_4,
            'ind_4_1' => $request->ind_4_1,
            'ind_4_2'  => $request->ind_4_2,
            'ind_4_3' => $request->ind_4_3,
            'ind_4_4' => $request->ind_4_4,
            'ind_4_5' => $request->ind_4_5,
            'ind_4_6' => $request->ind_4_6,
            'ind_4_7' => $request->ind_4_7,
            'ind_4_8' => $request->ind_4_8,
            'ind_4_9' => $request->ind_4_9,
            'ind_4_10' => $request->ind_4_10,
            'ind_4_11' => $request->ind_4_11

        ]);
        $user = User::find(session()->get('id'));

        $user->update([
            'username' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Di Update');
    }



    public function store(Request $request)
    {

        $alumni = new Alumni();
        // dd($alumni->user_id);
        $alumni->users_id = session()->get('id');
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
        return redirect()->back();
    }
}
