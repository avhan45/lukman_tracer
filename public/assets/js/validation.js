$(document).ready(function(){
    // $("#next1").attr('disabled','disabled');
    $("#next1").click(function(){
        if(!$("#nama_lengkap").val() ){
            alert("Nama Tidak Boleh Kosong");
            $("#nama_lengkap").focus();
            return false;
        }else if(!$("#jk").val()){
            alert("Jenis Kelamin Tidak Boleh Kosong");
            $("#jk").focus();
            return false;
        }else if(!$("#aslsma").val()){
            alert("Asal SMA Tidak Boleh Kosong");
            $("#aslsma").focus();
            return false;
        }else if(!$("#kab_smu").val()){
            alert("Kabupaten SMU Tidak Boleh Kosong");
            $("#kab_smu").focus();
            return false;
        }else if(!$("#prov_smu").val()){
            alert("Provinsi SMU Tidak Boleh Kosong");
            $("#prov_smu").focus();
            return false;
        }else if(!$("#pos_smu").val()){
            alert("Kode Pos SMU Tidak Boleh Kosong");
            $("#pos_smu").focus();
            return false;
        }else if(!$("#tempatLahir").val()){
            alert("Tempat Lahir Tidak Boleh Kosong");
            $("#tempatLahir").focus();
            return false;
        }else if(!$("#tglLahir").val()){
            alert("Tanggal Lahir Tidak Boleh Kosong");
            $("#tglLahir").focus();
            return false;
        }else if(!$("#alamatKantor").val()){
            alert("Alamat Kantor Tidak Boleh Kosong");
            $("#alamatKantor").focus();
            return false;
        }else if(!$("#telpkantor").val()){
            alert("Nomor Telepon Kantor Tidak Boleh Kosong");
            $("#telpkantor").focus();
            return false;
        }else if(!$("#kodekantor").val()){
            alert("Kode Kantor Tidak Boleh Kosong");
            $("#kodekantor").focus();
            return false;
        }else if(!$("#alamatRumah").val()){
            alert("Alamat Rumah Tidak Boleh Kosong");
            $("#alamatRumah").focus();
            return false;
        }else if(!$("#kelurahan").val()){
            alert("Kelurahan Tidak Boleh Kosong");
            $("#kelurahan").focus();
            return false;
        }else if(!$("#kecamatan").val()){
            alert("Kecamatan Tidak Boleh Kosong");
            $("#kecamatan").focus();
            return false;
        }else if(!$("#kabupaten").val()){
            alert("Kabupaten Tidak Boleh Kosong");
            $("#kabupaten").focus();
            return false;
        }else if(!$("#provinsi").val()){
            alert("Provinsi Tidak Boleh Kosong");
            $("#provinsi").focus();
            return false;
        }else if(!$("#notelp").val()){
            alert("Nomor Telepon Tidak Boleh Kosong");
            $("#notelp").focus();
            return false;
        }else if(!$("#email").val()){
            alert("Email Tidak Boleh Kosong");
            $("#email").focus();
            return false;
        }else{
            $("#dataPendidikan").removeClass('d-none');
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#pendidikan").addClass('btn-success');
            $("#pribadi").removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        }

    });
    $("#next2").click(function() {
        if(!$("#thnmasuk").val()){
            alert("Thn Masuk Tidak Boleh Kosong");
            $("#thnmasuk").focus();
            return false;
        }else if(!$("#thnwisuda").val()){
            alert("Tahun Wisuda Tidak Boleh Kosong");
            $("#thnwisuda").focus();
            return false;
        }else if(!$("#prodi").val()){
            alert("Prodi Tidak Boleh Kosong");
            $("#prodi").focus();
            return false;
        }else{
            $("#dataPendidikan").addClass('d-none');
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").removeClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pekerjaan").addClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        }
    });
    $("#next3").click(function() {
        if(!$("#tmptkerja").val()){
            alert("Tempat Kerja Tidak Boleh Kosong");
            $("#tmptkerja").focus();
            return false;
        }else if(!$("#jenistmptkerja").val()){
            alert("Jenis Tempat Kerja Tidak Boleh Kosong");
            $("#jenistmptkerja").focus();
            return false;
        }else if(!$("#jabatan").val()){
            alert("Jabatan Tidak Boleh Kosong");
            $("#jabatan").focus();
            return false;
        }else if(!$("#thnbekerja").val()){
            $("#thnbekerja").focus();
            return false;
        }else{
            $("#dataPendidikan").addClass('d-none');
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").removeClass('d-none');
            $("#dataPengalaman").addClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#relevansi").addClass('btn-success');
            $("#pengalaman").removeClass('btn-success');
            $("#indikator").removeClass('btn-success');
        }
    });
    $("#next4").click(function() {
        if(!$("#p10").val()){
            alert("Saran Tidak Boleh Kosong");
        }else{
            $("#dataPendidikan").addClass('d-none');
            $("#dataPribadi").addClass('d-none');
            $("#dataPekerjaan").addClass('d-none');
            $("#dataRelevansi").addClass('d-none');
            $("#dataPengalaman").removeClass('d-none');
            $("#dataIndikator").addClass('d-none');
            $("#pribadi").removeClass('btn-success');
            $("#pendidikan").removeClass('btn-success');
            $("#pekerjaan").removeClass('btn-success');
            $("#relevansi").removeClass('btn-success');
            $("#pengalaman").addClass('btn-success');
            $("#indikator").removeClass('btn-success');  
        }
    });
});