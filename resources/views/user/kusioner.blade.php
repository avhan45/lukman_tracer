@extends('layout.template')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <!-- 
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        
    </div>
-->
    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="#" id="pribadi" class="m-0 font-weight-bold btn ">Data Pribadi</a>
                    <a href="#" id="pendidikan" class="m-0 font-weight-bold btn ">Riwayat Pendidikan</a>
                    <a href="#" id="pekerjaan" class="m-0 font-weight-bold btn ">Riwayat Pekerjaan</a>
                    <a href="#" id="relevansi" class="m-0 font-weight-bold btn ">Relevansi</a>
                    <a href="#" id="pengalaman" class="m-0 font-weight-bold btn ">Pengalaman</a>
                    <a href="#" id="indikator" class="m-0 font-weight-bold btn ">Indikator</a>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <form action="/alumni/create" method="POST">
                    @csrf
                    {{-- Data Pribadi --}}
                <div class="card-body" id="dataPribadi">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $user }}">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>                                       
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Asal SMA</label>
                            <input type="text" name="asalsma" id="aslsma" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Kabupaten/Kota</label>
                            <input type="text" name="kab_smu" id="kab_smu" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" name="prov_smu" id="prov_smu" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="text" name="pos_smu" id="pos_smu" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempatLahir" id="tempatLahir" class="form-control"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tglLahir" id="tglLahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat Kantor</label>
                                <textarea name="alamatKantor" id="alamatKantor" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">No. Telpon</label>
                                <input type="text" name="telpkantor" id="telpkantor" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Kode Pos</label>
                                <input type="text" name="kodekantor" id="kodekantor" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat Rumah/Kontak</label>
                                <textarea name="alamatRumah" id="alamatRumah" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                            <div class="col-md-3">
                                <div class="from-group">
                                    <label for="">Kelurahan</label>
                                    <input type="text" name="kelurahan" id="kelurahan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="from-group">
                                    <label for="">Kecamatan</label>
                                    <input type="text" name="kecamatan" id="kecamatan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="from-group">
                                    <label for="">Kabupaten</label>
                                    <input type="text" name="kabupaten" id="kabupaten" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Provinsi</label>
                                    <input type="text" name="provinsi" id="provinsi" class="form-control">
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No. Telpon</label>
                                <input type="text" name="notelp" id="notelp" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">E-Mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary" id="next1" >Next</button>
                        </div>
                    </div>
                </div>
                {{-- Data Pendidikan --}}
                <div class="card-body d-none" id="dataPendidikan">
                    <div class="row">
                        <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Tahun Masuk</label>
                            <select name="thnmasuk" id="thnmasuk" class="form-control">
                                {{-- <option value="<?= date('Y') ?>"><?= date('Y') ?></option> --}}
                                <option value="">--Pilih Tahun--</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Bulan Wisuda</label>
                                <select name="blnwisuda" id="bulan" class="form-control">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tahun Wisuda</label>
                                <input type="text" name="thnwisuda" id="thnwisuda" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Program Studi</label>
                                <select name="prodi" id="prodi" class="form-control">
                                    <option value="">--Pilih Prodi--</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    <option value="Teknik Komputer">Teknik Komputer</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary" id="next2">Next</button>
                        </div>
                    </div>
                </div>
                {{-- Data Pekerjaan --}}
                <div class="card-body d-none" id="dataPekerjaan">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Tempat Bekerja</label>
                                <input type="text" class="form-control" name="tmptkerja" id="tmptkerja">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis instansi/bidang usaha/industri: </label>
                                <select name="jenistmptkerja" id="jenistmptkerja" class="form-control">
                                    <option value="Pemerintah Pusat">Pemerintah Pusat</option>
                                    <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Bulan &</label>
                                <select name="bulankerja" id="bulankerja" class="form-control">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Tahun Bekerja</label>
                                <input type="text" name="thnbekerja" id="thnbekerja" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Bagaimana proses Saudara mendapatkan pekerjaan ini? </label>
                                <select name="p1" id="p1" class="form-control">
                                    <option value="aktif">Aktif (Mencari Sendiri)</option>
                                    <option value="pasif">Pasif (Ditawari Pekerjaan)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Darimana Saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan ini?</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="p2" id="p2">
                                    <label class="form-check-label" for="p2" >Iklan</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="p2_1" id="p2_1">
                                    <label class="form-check-label" for="p2_1">Internet</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="p2_2" id="p2_2">
                                    <label class="form-check-label" for="p2_2" >Pengumuman di Kampus</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="p2_3" id="p2_3">
                                    <label class="form-check-label" for="p2_3" >Koneksi, (Teman, Dosen, Saudara/Keluarga, Dll)</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="p2_4" id="p2_4">
                                    <label class="form-check-label" for="p2_4" >Info Lowongan Kemahasiswaan</label>
                                </div>
                                  <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm" >Lainnya, Sebutkan</span>
                                    </div>
                                    <input type="text" class="form-control" name="p2_5" id="p2_5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Sejauh mana pekerjaan Saudara yang terakhir/sekarang sesuai dengan harapan ketika pertama
                                    kali belajar di AMIK Global?</label>
                                    <select name="p3" id="p3" class="form-control">
                                        <option value="sangat sesuai dengan harapan">sangat sesuai dengan harapan</option>
                                        <option value="sesuai harapan">sesuai harapan</option>
                                        <option value="kurang sesuai harapan">kurang sesuai harapan</option>
                                        <option value="tidak sesuai harapan">tidak sesuai harapan</option>

                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Apakah Saudara puas dengan pekerjaan Saudara yang terakhir/sekarang?</label>
                                    <select name="p4" id="##" class="form-control">
                                        <option value="Sangat Puas">Sangat Puas</option>
                                        <option value=" Puas"> Puas</option>
                                        <option value="Kurang Puas">Kurang Puas</option>
                                        <option value="Tidak Puas">Tidak Puas</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Secara umum, apa pertimbangan utama Saudara dalam memilih pekerjaan yang terakhir/sekarang</label>
                                    <select name="p5" id="##" class="form-control">
                                        <option value=" gaji memadai"> gaji memadai</option>
                                        <option value="  sesuai bidang keilmuan">  sesuai bidang keilmuan</option>
                                        <option value="mendapatkan pengalaman">mendapatkan pengalaman</option>
                                        <option value="mendapatkan ilmu pengetahuan">mendapatkan ilmu pengetahuan</option>
                                        <option value=" mendapatkan ketrampilan"> mendapatkan ketrampilan</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Berapa rata-rata pendapatan (take home pay = seluruh pendapatan per bulan termasuk bonus,
                                    insentif, dsb.) Saudara pada pekerjaan terakhir/sekarang? </label>
                                    <select name="p6" id="##" class="form-control">
                                        <option value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                                        <option value="< Rp. 3.000.000"> > Rp. 1.000.000 - Rp. 3.000.000</option>
                                        <option value="< Rp. 5.000.000"> > Rp. 3.000.000 - Rp. 5.000.000</option>
                                        <option value="< Rp. 7.000.000"> > Rp. 5.000.000 - Rp. 7.500.000</option>
                                        <option value="< Rp. 10.000.000"> > Rp. 7.500.000 - Rp. 10.000.000</option>
                                        <option value="> Rp. 10.000.000"> > Rp. 10.000.000</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari? 
                                </label>
                                <select name="p7" id="#" class="form-control">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Menurut Saudara, bagaimana kebutuhan institusi tempat Saudara bekerja terhadap lulusan
                                    dari Program Studi/jurusan Saudara:                                                    
                                </label>
                                <select name="p8" id="#" class="form-control">
                                    <option value="Sangat Tinggi">Sangat Tinggi</option>
                                    <option value="Tinggi">Tinggi</option>
                                    <option value="Rendah">Rendah</option>
                                    <option value="Sangat Rendah">Sangat Rendah</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-primary"  id="next3">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Data Relevansi --}}
                <div class="card-body d-none" id="dataRelevansi">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Apakah pendidikan yang Saudara dapat di AMIK Global relevan dengan pekerjaan Saudara?
                                </label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="p9" id="p9">
                                    <label class="form-check-label" for="flexSwitchCheckDefault5" >Ya</label>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm" >Tidak</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" name="p9_1" id="p9_1" aria-describedby="inputGroup-sizing-sm">
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Dari pengalaman Saudara bekerja, apa saran praktis Saudara untuk pendidikan di AMIK dalam rangka meningkatkan kesesuaian antara pendidikan dengan lapangan pekerjaan? </label>
                                <textarea name="p10" id="p10" cols="30" rows="10" class="form-control" placeholder="Saran"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-primary" id="next4">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Data Penglaman --}}
                <div class="card-body d-none" id="dataPengalaman">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Saat belajar di  UMLA, menurut Saudara seberapa penting pengalaman pembelajaran berikut ini memberikan kontribusi dalam dunia kerja?</label>
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">Sangat Penting</th>
                                            <th class="text-center">Penting</th>
                                            <th class="text-center">Kurang Penting</th>
                                            <th class="text-center">Tidak Penting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>pengalaman belajar di dalam kelas </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_1" value="Sangat Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_1" value="Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_1" value="Kurang Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_1" value="Tidak Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>pengalaman belajar di laboratorium </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_2" value="Sangat Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_2" value="Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_2" value="Kurang Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_2" value="Tidak Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>pengalaman belajar di masyarakat </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_3" value="Sangat Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_3" value="Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_3" value="Kurang Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_3" value="Tidak Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>pengalaman magang di perusahaan/instansi  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_4" value="Sangat Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_4" value="Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_4" value="Kurang Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_4" value="Tidak Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>pengalaman belajar dalam organisasi kmhswn  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_5" value="Sangat Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_5" value="Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_5" value="Kurang Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_5" value="Tidak Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>pengalaman belajar dalam pergaulan kampus  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_6" value="Sangat Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_6" value="Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_6" value="Kurang Penting"  type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_6" value="Tidak Penting"  type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>pengalaman belajar mandiri   </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input"name="peng_7" value="Sangat Penting"  type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_7" value="Penting"  type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_7" value="Kurang Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="peng_7" value="Tidak Penting" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-primary" id="next5">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Data Indikator --}}
                <div class="card-body d-none" id="dataIndikator">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Saat baru lulus, sejauh mana Saudara merasa mampu bersaing dng lulusan perguruan tinggi lain?</label>
                                <table>
                                    <tr>
                                        <td class="pr-5">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="ind_1" value="Sangat Mampu" type="checkbox" role="switch" id="flexSwitchCheckDefault6">
                                                <label class="form-check-label" for="flexSwitchCheckDefault6">Sangat Mampu</label>
                                            </div>
                                        </td>
                                        <td class="pr-5">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="ind_1" value="Mampu" type="checkbox" role="switch" id="flexSwitchCheckDefault7">
                                                <label class="form-check-label" for="flexSwitchCheckDefault7">Mampu</label>
                                            </div>
                                        </td>
                                        <td class="pr-5">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="ind_1" value="Kurang Mampu" type="checkbox" role="switch" id="flexSwitchCheckDefault8">
                                                <label class="form-check-label" for="flexSwitchCheckDefault8">Kurang Mampu</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="ind_1" value="Sangat Tidak Mampu" type="checkbox" role="switch" id="flexSwitchCheckDefault9">
                                                <label class="form-check-label" for="flexSwitchCheckDefault9">Sangat Tidak Mampu</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Sejauh ini, menurut Saudara lulusan UMLA yang bagaimana yg diperlukan oleh pasar/lapangan
                                    kerja?</label>
                                    <select name="ind_2" id="ind_2" class="form-control">
                                        <option value="generik">Generik (Umum)</option>
                                        <option value="spesifik">Spesifik</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Saat baru lulus, menurut penilaian Saudara, sejauh mana Saudara menguasai kompetensi berikut?
                                </label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">Sangat Menguasai</th>
                                            <th class="text-center">Menguasai</th>
                                            <th class="text-center">Kurang Menguasai</th>
                                            <th class="text-center">Tidak Menguasai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pengetahuan umum</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Bahasa Inggris</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_1" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_1" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_1" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_1" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Komputer </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_2" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_2" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_2" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_2" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Metodologi penelitian </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_3" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_3" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_3" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_3" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Kerjasama tim</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_4" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_4" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_4" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_4" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Keterampilan komunikasi lisan </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_5" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_5" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_5" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_5" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Keterampilan komunikasi tertulis  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_6" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_6" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_6" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_6" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Proses pemberdayaan masyarakat   </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_7" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_7" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_7" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_7" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Pengetahuan teoritis spesifik Jurusan  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_8" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_8" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_8" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_8" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Pengetahuan praktis spesifik Jurusan  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_9" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_9" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_9" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_9" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Manajemen organisasi </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_10" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_10" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_10" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_10" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Kepemimpinan/leadership </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_11" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_11" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_11" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_3_11" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Dalam pekerjaan, menurut penilaian Saudara sejauh mana kompetensi berikut diperlukan?
                                </label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">Sangat Menguasai</th>
                                            <th class="text-center">Menguasai</th>
                                            <th class="text-center">Kurang Menguasai</th>
                                            <th class="text-center">Tidak Menguasai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pengetahuan umum</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Bahasa Inggris</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_1" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_1" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_1" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_1" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Komputer </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_2" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_2" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_2" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_2" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Metodologi penelitian </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_3" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_3" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_3" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_3" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Kerjasama tim</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_4" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_4" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_4" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_4" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Keterampilan komunikasi lisan </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_5" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_5" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_5" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_5" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Keterampilan komunikasi tertulis  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_6" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_6" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_6" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_6" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Proses pemberdayaan masyarakat   </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_7" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_7" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_7" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_7" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Pengetahuan teoritis spesifik Jurusan  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_8" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_8" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_8" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_8" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Pengetahuan praktis spesifik Jurusan  </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_9" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_9" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_9" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_9" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Manajemen organisasi </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_10" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_10" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_10" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_10" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Kepemimpinan/leadership </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_11" value="Sangat Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_11" value="Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_11" value="Kurang Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="ind_4_11" value="Tidak Menguasai" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $("#pribadi").addClass('btn-success');
        $("#pribadi").click(function(){
            // $("#dataPendidikan").addClass('d-none');
            $("#dataPribadi").removeClass('d-none');
            $("#dataPendidikan").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#pribadi").addClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        });
        $("#pendidikan").click(function(e){
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#dataPendidikan").removeClass("d-none");
            $("#pendidikan").addClass('btn-success');
            $("#pribadi").removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        });
        $("#pekerjaan").click(function(e){
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").removeClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#dataPendidikan").addClass("d-none");
            $("#pekerjaan").addClass('btn-success');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        });
        $("#relevansi").click(function(e){
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").removeClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#dataPendidikan").addClass("d-none");
            $("#relevansi").addClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        });
        $("#pengalaman").click(function(e){
            $("#dataPendidikan").addClass("d-none");
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").removeClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#pengalaman").addClass('btn-success');
            $('#relevansi').removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
            
        });
        $("#indikator").click(function(e){
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").removeClass('d-none');
            $("#dataPendidikan").addClass("d-none");
            $("#indikator").addClass('btn-success');
            $('#relevansi').removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            
        });
        
        // $("#next1").click(function(){
        //     $("#dataPendidikan").removeClass('d-none');
        //     $("#dataPribadi").addClass('d-none');
        //     $("#dataPekerjaan").addClass('d-none');
        //     $("#dataRelevansi").addClass('d-none');
        //     $("#dataPengalaman").addClass('d-none');
        //     $("#dataIndikator").addClass('d-none');
        //     $("#pendidikan").addClass('btn-success');
        //     $("#pribadi").removeClass('btn-success');
        //     $("#pekerjaan").removeClass('btn-success');
        //     $("#relevansi").removeClass('btn-success');
        //     $("#pengalaman").removeClass('btn-success');
        //     $("#indikator").removeClass('btn-success');
        // });
        // $("#next2").click(function(){
        //     $("#dataPendidikan").addClass('d-none');
        //     $("#dataPribadi").addClass('d-none');
        //     $("#dataPekerjaan").removeClass('d-none');
        //     $("#dataRelevansi").addClass('d-none');
        //     $("#dataPengalaman").addClass('d-none');
        //     $("#dataIndikator").addClass('d-none');
        //     $("#pribadi").removeClass('btn-success');
        //     $("#pendidikan").removeClass('btn-success');
        //     $("#pekerjaan").addClass('btn-success');
        //     $("#relevansi").removeClass('btn-success');
        //     $("#pengalaman").removeClass('btn-success');
        //     $("#indikator").removeClass('btn-success');
        // });
        // $("#next3").click(function(){
        //     $("#dataPendidikan").addClass('d-none');
        //     $("#dataPribadi").addClass('d-none');
        //     $("#dataPekerjaan").addClass('d-none');
        //     $("#dataRelevansi").removeClass('d-none');
        //     $("#dataPengalaman").addClass('d-none');
        //     $("#dataIndikator").addClass('d-none');
        //     $("#pribadi").removeClass('btn-success');
        //     $("#pendidikan").removeClass('btn-success');
        //     $("#pekerjaan").removeClass('btn-success');
        //     $("#relevansi").addClass('btn-success');
        //     $("#pengalaman").removeClass('btn-success');
        //     $("#indikator").removeClass('btn-success');
        // });
        // $("#next4").click(function(){
        //     $("#dataPendidikan").addClass('d-none');
        //     $("#dataPribadi").addClass('d-none');
        //     $("#dataPekerjaan").addClass('d-none');
        //     $("#dataRelevansi").addClass('d-none');
        //     $("#dataPengalaman").removeClass('d-none');
        //     $("#dataIndikator").addClass('d-none');
        //     $("#pribadi").removeClass('btn-success');
        //     $("#pendidikan").removeClass('btn-success');
        //     $("#pekerjaan").removeClass('btn-success');
        //     $("#relevansi").removeClass('btn-success');
        //     $("#pengalaman").addClass('btn-success');
        //     $("#indikator").removeClass('btn-success');
        // });
        $("#next5").click(function(){
            $("#dataPendidikan").addClass('d-none');
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").removeClass('d-none');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").addClass('btn-success');
        });
        

        // $("#tahunmasuk").datepicker({
        //     format: "yyyy",
        //     viewMode: "years",
        //     minViewMode: "years"
        // });
        $("#thnlulus").click(function(){
            console.log("Tes");
        });
    });
   
</script>
@endsection