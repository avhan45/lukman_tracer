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
        Schema::create('alumni', function (Blueprint $table) {
            $table->id('id_alumni');
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
            $table->string('p2');
            $table->string('p3');
            $table->string('p4');
            $table->string('p5');
            $table->string('p6');
            $table->string('p7');
            $table->string('p8');
            $table->string('p9');
            $table->string('p10');
            $table->timestamps();
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
