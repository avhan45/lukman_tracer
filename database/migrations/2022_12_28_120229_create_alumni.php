<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table){
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jk');
            $table->string('asal_smu');
            $table->string('kabupaten_smu');
            $table->string('provinsi_smu');
            $table->string('kode_pos_smu');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat_kantor');
            $table->string('no_telp_kantor');
            $table->string('kode_pos_kantor');
            $table->text('alamat_rumah');
            $table->string('kel');
            $table->string('kec');
            $table->string('kab');
            $table->string('prov');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->string('thn_masuk');
            $table->string('bln_wisuda');
            $table->string('thn_wisuda');
            $table->string('prodi');
            $table->string('nama_tempat_bekerja');
            $table->string('jenis_instansi');
            $table->string('jabatan');
            $table->string('bln_bekerja');
            $table->string('thn_bekerja');
            $table->string('p1');
            $table->string('p2')->nullable();
            $table->string('p2_1')->nullable();
            $table->string('p2_2')->nullable();
            $table->string('p2_3')->nullable();
            $table->string('p2_4')->nullable();
            $table->string('p2_5')->nullable();
            $table->string('p3');
            $table->string('p4');
            $table->string('p5');
            $table->string('p6');
            $table->string('p7');
            $table->string('p8');
            $table->string('p9');
            $table->string('p9_1')->nullable();
            $table->string('p10');
            $table->string('peng_kelas');
            $table->string('peng_lab');
            $table->string('peng_masyarakat');
            $table->string('peng_perusahaan');
            $table->string('peng_organisasi');
            $table->string('peng_kampus');
            $table->string('peng_mandiri');
            $table->string('ind_1');
            $table->string('ind_2');
            $table->string('ind_3',50);
            $table->string('ind_3_1',50);
            $table->string('ind_3_2',50);
            $table->string('ind_3_3',50);
            $table->string('ind_3_4',50);
            $table->string('ind_3_5',50);
            $table->string('ind_3_6',50);
            $table->string('ind_3_7',50);
            $table->string('ind_3_8',50);
            $table->string('ind_3_9',50);
            $table->string('ind_3_10',50);
            $table->string('ind_3_11',50);
            $table->string('ind_4', 50);
            $table->string('ind_4_1', 50);
            $table->string('ind_4_2',50);
            $table->string('ind_4_3',50);
            $table->string('ind_4_4', 50);
            $table->string('ind_4_5',50);
            $table->string('ind_4_6',50);
            $table->string('ind_4_7', 50);
            $table->string('ind_4_8',50);
            $table->string('ind_4_9',50);
            $table->string('ind_4_10',50);
            $table->string('ind_4_11',50);
            $table->timestamps();
            // $table->foreign('user_nim')->references('nim')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni');
    }
};
