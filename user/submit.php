<?php

include '../dbconnect.php';

if(isset($_POST['submit'])){

        $userid = $_POST['userid'];
        $judul = $_POST['judul'];
        $instansi = $_POST['instansi'];
        $inovator = $_POST['inovator'];
        $alamat_ins = $_POST['alamat_ins'];
        $notelp = $_POST['notelp'];
        $tgl_inov = $_POST['tgl_inov'];
        $email = $_POST['email'];
      

        $provinsi = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];

        $kategori = $_POST['kategori'];
        echo str_word_count($kategori).' kata';
        $ringkasan = $_POST['ringkasan'];
        $tujuan_inov = $_POST['tujuan_inov'];

        echo str_word_count($tujuan_inov).'kata';

        $keselarasan = $_POST['keselarasan'];
        $signifikansi = $_POST['signifikansi'];
        $inovatif = $_POST['inovatif'];
        $sifat = $_POST['sifat'];
        $sumberdaya = $_POST['sumberdaya'];
        $keberlanjutan = $_POST['keberlanjutan'];
        $dampak = $_POST['dampak'];
        $indikator = $_POST['indikator'];
        $hasil_eval = $_POST['hasil_eval'];
        $kolaborasi = $_POST['kolaborasi'];
        $pelajaran = $_POST['pelajaran'];

        $drive = $_POST['drive'];
        $youtube = $_POST['youtube'];

        $insert = mysqli_query($conn,"insert into userdata (userid, judul, instansi, inovator, alamat_ins, notelp, tgl_inov, 
        email, provinsi, kota, kecamatan, kelurahan, kategori, ringkasan, tujuan_inov, keselarasan, signifikansi, inovatif,
        sifat, sumberdaya, keberlanjutan, dampak, indikator, hasil_eval, kolaborasi, pelajaran, drive, youtube) 
        values ('$userid','$judul', '$instansi', '$inovator', '$alamat_ins', '$notelp', '$tgl_inov', '$email', 
        '$provinsi', '$kota', '$kecamatan', '$kelurahan', '$kategori', '$ringkasan', '$tujuan_inov', '$keselarasan', 
        '$signifikansi', '$inovatif', '$sifat', '$sumberdaya', '$keberlanjutan', '$dampak', '$indikator', '$hasil_eval', 
        '$kolaborasi', '$pelajaran', '$drive', '$youtube')") or die(mysqli_error($conn));
    };

    //kalau update
    if(isset($_POST['update'])){
      $id = $_POST['id'];

      $judul = $_POST['judul'];
      $instansi = $_POST['instansi'];
      $inovator = $_POST['inovator'];
      $alamat_ins = $_POST['alamat_ins'];
      $notelp = $_POST['notelp'];
      $tgl_inov = $_POST['tgl_inov'];
      $email = $_POST['email'];

      $provinsi = $_POST['provinsi'];
      $kota = $_POST['kota'];
      $kecamatan = $_POST['kecamatan'];
      $kelurahan = $_POST['kelurahan'];

      $kategori = $_POST['kategori'];
      echo str_word_count($kategori).' kata';
      $ringkasan = $_POST['ringkasan'];
      $tujuan_inov = $_POST['tujuan_inov'];
      $keselarasan = $_POST['keselarasan'];
      $signifikansi = $_POST['signifikansi'];
      $inovatif = $_POST['inovatif'];
      $sifat = $_POST['sifat'];

      $sumberdaya = $_POST['sumberdaya'];
      $keberlanjutan = $_POST['keberlanjutan'];
      $dampak = $_POST['dampak'];
      $indikator = $_POST['indikator'];
      $hasil_eval = $_POST['hasil_eval'];
      $kolaborasi = $_POST['kolaborasi'];
      $pelajaran = $_POST['pelajaran'];

      $drive = $_POST['drive'];
      $youtube = $_POST['youtube'];
      


    $update = mysqli_query($conn,"update userdata
    set judul='$judul', instansi='$instansi', inovator='$inovator', alamat_ins='$alamat_ins', notelp='$notelp', tgl_inov='$tgl_inov', email='$email', 
    provinsi ='$provinsi', kota='$kota', kecamatan='$kecamatan', kelurahan='$kelurahan',
    kategori='$kategori', ringkasan='$ringkasan', tujuan_inov='$tujuan_inov', keselarasan='$keselarasan', signifikansi='$signifikansi', inovatif='$inovatif', sifat='$sifat',
    sumberdaya='$sumberdaya',  keberlanjutan='$keberlanjutan', dampak='$dampak', indikator='$indikator', hasil_eval='$hasil_eval', kolaborasi='$kolaborasi', pelajaran='$pelajaran',
    drive='$drive', youtube='$youtube' where userdataid='$id'");

    if($update){ 

      //berhasil bikin
      echo " <div class='alert alert-success'>
              Berhasil submit data.
          </div>
          <meta http-equiv='refresh' content='1; url= mydata.php?u=$id'/>  ";  

    }else{

      echo "<div class='alert alert-warning'>
              Gagal submit data. Silakan coba lagi nanti.
          </div>
          <meta http-equiv='refresh' content='3; url= mydata.php?u=$id'/> ";
      }

    };



    
//get timezone jkt
date_default_timezone_set("Asia/Bangkok");
$today = date("Y-m-d"); //now

    //kalau konfirmasi
    if(isset($_POST['ok'])){
      $id = $_POST['id'];
      $updateaja = mysqli_query($conn,"update userdata set status='Verified', tglkonfirmasi='$today', status_pro='In Process' where userdataid='$id'");

      if($updateaja){
        //berhasil bikin
          echo " <div class='alert alert-success'>
          Berhasil submit data.
      </div>
      <meta http-equiv='refresh' content='1; url= verified.php?u=".$id."'/>";  
      } else {
        echo "<div class='alert alert-warning'>
              Gagal submit data. Silakan coba lagi nanti.
          </div>
          <meta http-equiv='refresh' content='3; url= mydata.php?u=".$id."'/>";
      }
    };

?>