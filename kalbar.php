<?php
include('koneksi.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Objek Wisata Kalimantan Barat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="http://2.bp.blogspot.com/-YXpuxVKzbUM/ULoCEZUDgZI/AAAAAAAAAHE/0yCq4qkNKmE/s1600/logo-prop-kalbar.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/css/style1.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary"></span>Objek Wisata</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Beranda</a>
                        <a href="kalbar.php" class="nav-item nav-link">Pesan Tiket</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary"></span>Objek Wisata</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="data.php" class="nav-item nav-link">Daftar Pesanan</a>
                        <a href="grafik.php" class="nav-item nav-link">Grafik Pesanan</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<div class="container">
<center><h3 style="margin: 40px 0">Form Pemesanan Tiket Objek Wisata Kalimantan Barat</h3><center>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel-body">
                <!--program form untuk tambah data-->
                <form class="form-horizontal" style="text-align: start; margin: auto;" action="proses.php" method="post">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="">
                            <input type="text" name="nama" class="form-control" id="nama"
                                   placeholder="Inputkan Nama Anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="noid" class="col-sm-3 control-label">Nomer identitas</label>
                        <div class="">
                            <input type="text" name="noid" class="form-control" id="noid" 
                                   placeholder="Inputkan no_identitas Anda" minlength="16" maxlength="16" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nohp" class="col-sm-3 control-label">Nomer HP</label>
                        <div class="">
                            <input type="text" name="nohp" class="form-control" id="nohp"
                                   placeholder="Inputkan Nomer HP anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmpwisata" class="col-sm-3 control-label">Nama Wisata</label>
                        <div class="">
                            <select name="tmpwisata" id="tmpwisata" class="form-control">
                            <option value="1">Tugu Bambu Pontianak - Rp 2.000</option>
                            <option value="2">Bukit Kelam - Rp 15.000</option>
                            <option value="3">Pulau Temajo - Rp 10.000</option>
                            <option value="4"> Danau Sentarum - Rp 5.000</option>
                            <option value="5">Bukit Babi - Rp 10.000</option>
                            <option value="6 - Rp 5.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl" class="col-sm-3 control-label">Tanggal Kunjungan</label>
                        <div class="">
                            <input type="date" name="tgl" class="form-control" id="tgl"
                                   placeholder="Inputkan Tanggal Pengunjung" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pdewasa" class="col-sm-3 control-label">Pengunjung Dewasa</label>
                        <div class="">
                            <input type="number" name="pdewasa" id="pdewasa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="panak" class="col-sm-3 control-label">Pengunjung Anak</label>
                        <div class="">
                            <input type="number" name="panak" id="panak" class="form-control"
                            placeholder="Anak-anak merupakan usia yang dibawah 12 tahun" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                        <div class="col-sm-offset-3 ">
                            <input type="checkbox"required>                        
                            <h9>Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan
                                syarat dan ketentuan yang telah ditetapkan.
                             </h9><br> 
                        </div>
                    </div>
                    <div class="form-group">
                    <td>
                    <div class="col-sm-offset-3" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Hitung Total Bayar</button>
                    <button type="submit" formaction="proses_dua.php" class="btn btn-primary">Pesan Sekarang</button>
                    <button type="submit" formaction="kalbar.php" class="btn btn-primary">Cancel</button>
                    </div>
                    </td>
                        <!-- <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="floated">
                                <span class=""></span> Pesan Sekarang
                            </button>
                            <button type="submit" class="floated">
                                <span class=""></span> Pesan Sekarang
                            </button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script>
</script>
</body>
</html>