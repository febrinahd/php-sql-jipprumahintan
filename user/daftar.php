<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include '../cek.php';
    if($role!=='User'){
        header("location:../login.php");
    };
    $userid = $_SESSION['userid'];

    include 'submit.php';

    
    //cek dulu sudah pernah submit belum
    $cekdulu = mysqli_query($conn,"select * from userdata where userid='$userid'");
    $lihathasil = mysqli_num_rows($cekdulu);
    
    //kalau udah pernah submit
    //if($lihathasil>0){
        //header("location:mydata.php");
    //} else {

    //};
	?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JIPP Rumah Intan: Pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><h5 style = "color:tosca ; margin-top:2%" width="50%" \>JIPP Rumah Intan</h5></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li><a href="index.php"><span>Dashboard</span></a></li>
                            <li class="active">
                                <a href="daftar.php"><i class="ti-layout"></i><span>Pendaftaran</span></a>
                            </li>
                            <li>
                                <a href="update.php"><i class="ti-layout"></i><span>List Proposal</span></a>
                            </li> 
                            <li>
                                <a href="../logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
			
            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- panduan -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Pendaftaran</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        Selamat datang di Sistem Informasi Jaringan Inovasi Pelayanan Publik (JIPP) Rumah Intan.
                                         <br><br>
                                         Panduan Pendaftaran:
                                         <br>1. Isi seluruh formulir yang ditampilkan kemudian periksa kembali, pastikan tidak ada data yang salah.
                                         <br>2. Klik submit, kemudian klik Confirm. Setelah di-confirm, data tidak dapat diubah kembali.
                                         <br>3. Jika sudah, bukti pendaftaran akan ditampilkan dan dapat diunduh menjadi PDF.
                                         <br>5. Jika terdapat kendala mengenai input proposal silakan menghubungi No.WA berikut : 
                                         <b>08978162107</b> pada jam kerja tertera. 
                                         <br>&nbsp;Atau 
                                         <a href="https://wa.me/628978162107?text=Selamat Pagi/Siang/Sore Admin">Klik Link</a>
                                         <br>
                                         <br>*Note: Pihak penyelenggara akan menerima data Anda setelah Anda klik 'Confirm'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!------------------ Pisahin ------------------->


                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="userid" value="<?php echo $userid ?>">
                <!-- formulir -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Inovator</h2>
                                    <p>*Harap isi dengan teliti dan benar</p>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Judul Inovasi*</label>
                                                <input name="judul" type="text" class="form-control" placeholder="Judul Inovasi" maxlength="12" required>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Instansi*</label>
                                                <input name="instansi" type="text" class="form-control" placeholder="Asal Instansi" maxlength="16" required>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Penanggung Jawab/Inovator*</label>
                                                <input name="inovator" type="text" class="form-control" placeholder="Penanggung Jawab/Inovator" maxlength="50" required>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Alamat Instansi*</label>
                                                <input name="alamat_ins" type="text" class="form-control" placeholder="Alamat Instansi" maxlength="50" required>
                                            </div>
                                            </div>                          
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon*</label>
                                                <input name="notelp" type="text" class="form-control" placeholder="Nomor Telepon Aktif" maxlength="20">
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Inovasi Dimulai*</label>
                                                <input name="tgl_inov" type="date" class="form-control">
                                            </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label>Email*</label>
                                                <input name="email" type="text" class="form-control" placeholder="Alamat Email Aktif" required>
                                            </div>
                                           
                                            <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Provinsi*</label>
                                                <input name="provinsi" type="text" class="form-control" placeholder="Provinsi" maxlength="12" required>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kota/Kabupaten*</label>
                                                <input name="kota" type="text" class="form-control" placeholder="Kota/Kabupaten*" maxlength="16" required>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kecamatan*</label>
                                                <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" maxlength="50" required>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kelurahan/Desa/Dusun*</label>
                                                <input name="kelurahan" type="text" class="form-control" placeholder="Alamat Instansi" maxlength="50" required>
                                            </div>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Proposal</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kategori*</label>
                                                <input name="kategori" type="text" class="form-control" placeholder="Kategori Inovasi" maxlength="16">
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label> 
                                                    Ringkasan*
                                                    <li>Ceritakan secara ringkas apa masalah yang ingin dipecahkan,</li>
                                                    <li>Bentuk inovasi sebagai solusinya,</li>
                                                    <li>dan Hasilnya setelah inovasi tersebut dilaksanakan.</li>
                                                    <li>Maksimal 300 Kata</li>
                                                </label>
                                                
                                                <textarea name="ringkasan" class="form-control" placeholder="Ringkasan Singkat Permasalahan" maxlength="300"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                                1. Tujuan Inovasi (Bobot 5%)
                                                    <li>Gambarkan/Jelaskan tujuan ("gagasan") munculnya inovasi ini.</li>
                                                    <li>Maksimal 200 kata.</li>
                                            </label>
                                                <textarea name="tujuan_inov" class="form-control" placeholder="Tujuan Inovasi" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                                2. Keselarasan Dengan Kategori yang Dipilih (Bobot 5%)
                                                    <li>Jelaskan keterkaitan inovasi dengan kategori yang dipilih.</li>
                                                    <li>Maksimal 100 kata.</li>
                                            </label>
                                                <textarea name="keselarasan" class="form-control" placeholder="Keselarasan dengan Kategori" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                            3. Signifikansi/Arti Penting(Bobot 15%)
                                                    <li>Inovasi tersebut harus berdampak positif terhadap kelompok-kelompok penduduk, termasuk kelompok yang rentan (yaitu anak-anak, perempuan, orang tua, orang cacat, dll) dalam konteks negara atau wilayah Anda.</li>
                                                    <li>Jelaskan bagaimana inovasi ini berperan penting dalam mengatasi kekurangan/kelemahan tata kelola, atau pelayanan administrasi umum publik di wilayah Anda.</li>
                                                    <li>Maksimal 200 kata.</li>
                                            </label>
                                                <textarea name="signifikansi" class="form-control" placeholder="Signifikansi/Arti Penting" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                            4. Inovatif/Kebaruan Atau Keunikan Atau Keaslian (Bobot 20%)
                                                    <li>Jelaskan sisi inovatif dari inovasi ini dalam konteks wilayah Anda.</li>
                                                    <li>Maksimal 100 kata.</li>
                                            </label>
                                                <textarea name="inovatif" class="form-control" placeholder="Inovatif/Keunikan/Keaslian" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                    
                                        <div class ="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                                5. Transferabilitas (Sifat Dapat Diterapkan Pada Konteks/Tempat Lain) (Bobot 10%)
                                                        <li>Apakah inovasi tersebut memiliki potensi dan/atau terbukti telah diterapkan dan diadaptasi (disesuaikan) ke dalam konteks lain (misalnya wilayah atau unit lain).</li>
                                                        <li>Jika ya, jelaskan di mana dan bagaimana prosesnya.</li>
                                                        <li>Maksimal 100 kata.</li>
                                                </label>
                                                    <textarea name="sifat" class="form-control" placeholder="Transferabilitas" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                            6. Sumber Daya Dan Keberlanjutan (Bobot 10%)
                                                        <li>Sumber daya apa (yaitu keuangan, manusia atau lainnya) yang digunakan untuk melaksanakan inovasi tersebut?</li>
                                                        <li>Langkah-langkah/strategi apa yang dilakukan dalam memobilisasi/ menggerakkan seluruh sumber daya internal maupun eksternal?</li>
                                                        <li>Bagaimana keberlanjutan sumber daya yang digunakan dalam inovasi ini? Apakah hingga saat ini sumber daya masih tersedia?</li>
                                                        <li>Maksimal 100 kata.</li>
                                                </label>
                                                    <textarea name="sumberdaya" class="form-control" placeholder="Sumber Daya" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                                        <li>Jelaskan apakah dan bagaimana keberlanjutan dari inovasi ini (meliputi aspek-aspek sosial, ekonomi dan lingkungan).</li>
                                                        <li>Maksimal 200 kata.</li>
                                                </label>
                                                    <textarea name="keberlanjutan" class="form-control" placeholder="Keberlanjutan" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                                7. Dampak (Bobot 15%)
                                                        <li>Apakah inovasi ini telah dievaluasi secara resmi skala dampaknya, melalui evaluasi internal atau eksternal, misalnya evaluasi yang dilakukan oleh APIP atau lembaga lain yang relevan?</li>
                                                        <li>Jika Tidak Jawablah Tidak.
                                                        <li>Jika Iya, jelaskan bagaimana inovasi ini dievaluasi dampaknya pada: </li>
                                                        <li>1. Target/kelompok sasaran</li>
                                                        <li>2. Kelompok masyarakat di luar kelompok sasaran</li>
                                                        <li>3. Aspek tata pemerintahan instansi (misalnya efisiensi anggaran; perbaikan proses bisnis; kolaborasi antarsatuan unit kerja/perangkat daerah dan/atau pemangku kepentingan lainnya; tingkat akuntabilitas).</li>
                                                        <li>4. Maksimal 100 kata.</li>
                                                </label>
                                                    <textarea name="dampak" class="form-control" placeholder="Dampak" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>
                                                    <li>Indikator-indikator apa yang digunakan dalam evaluasi itu.</li>
                                                    <li>Maksimal 100 kata.</li>
                                                </label>
                                                <textarea name="indikator" class="form-control" placeholder="Indikator yang Digunakan" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>
                                                    <li>Gambarkan/Apa hasil evaluasi tersebut?</li>
                                                    <li>Maksimal 100 kata.</li>
                                                </label>
                                                <textarea name="hasil_eval" class="form-control" placeholder="Gambaran Hasil Evaluasi" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

            

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                                8. Keterlibatan Pemangku Kepentingan (Menekankan Kerjasama/Kolaborasi, Keterlibatan, Koordinasi, Kemitraan Dan Inklusif) (Bobot 10%)
                                                    <li>Jelaskan pemangku kepentingan mana yang terlibat, dan apa peran dan kontribusi mereka dalam merancang, melaksanakan, dan mengevaluasi inovasi ini.</li>
                                                    <li>Maksimal 200 kata.</li>
                                                </label>
                                                <textarea name="kolaborasi" class="form-control" placeholder="Keterlibatan Pemangku Kepentingan" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                            <label>
                                            9. Pelajaran Yang Dipetik (Bobot 10%)
                                                    <li>Gambarkan pelajaran apa yang dipetik, serta usulan ide agar inovasi ini dapat ditingkatkan lebih lanjut atau gambarkan kekhususan inovasi yang membuat inovasi ini luar biasa yang membawa perubahan yang lebih cepat dan lebih luas. </li>
                                                    <li>Maksimal 100 kata.</li>
                                                </label>
                                                <textarea name="pelajaran" class="form-control" placeholder="Pelajaran yang Diambil" maxlength="200"></textarea>
                                            </div>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Pendukung</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Link Drive</label>
                                                <input name="drive" type="text" class="form-control" placeholder="Link Drive" maxlength="12">
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Link Youtube</label>
                                                <input name="youtube" type="text" class="form-control" placeholder="Link Youtube" maxlength="40">
                                            </div>
                                            </div>
                                        </div>


                                        <div class="modal-footer">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>JIPP Rumah Intan</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   
    <script src="../assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
    <script src="../assets/js/app.js"></script>
</body>

</html>
