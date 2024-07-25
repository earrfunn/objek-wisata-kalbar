<?php
include('koneksi.php');

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Objek Wisata Kalimantan Barat - Detail Pesanan</title>
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

</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">

<div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">Objek Wisata Kalimantan Barat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="kalbar.php">Pesan Tiket</a></li>
                <li><a href="data.php">Daftar Pesanan</a></li>
                <li><a href="grafik.php">Grafik Pesanan</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="panel-body">
                <!--Menampilkan data detail arsip-->
                <?php
                $sql = "SELECT * FROM beli WHERE id_beli = '{$_GET['id']}'";
                //proses query ke database
                $query = mysqli_query($kon, $sql) or die("SQL Detail error");
                //Merubaha data hasil query kedalam bentuk array
                $data = mysqli_fetch_array($query);
                ?>
                <center><h3>DETAIL DATA ID <?= $data['id_beli'] ?></h3><center>
                <!--dalam tabel--->
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><?= $data['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Nomer Identitas</td>
                        <td><?= $data['noid'] ?></td>
                    </tr>
                    <tr>
                        <td>Nomer HP</td>
                        <td><?= $data['nohp'] ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Wisata</td>
                        <td><?= $data['tmpwisata'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kunjungan</td>
                        <td><?= $data['tgl'] ?></td>
                    </tr>
                    <tr>
                        <td>Pengunjung Dewasa</td>
                        <td><?= $data['pdewasa'] ?></td>
                    </tr>
                    <tr>
                        <td>Pengunjung Anak</td>
                        <td><?= $data['panak'] ?></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>Rp. <?= $data['total'] ?></td>
                    </tr>
                </table>
            </div> <!--end panel-body-->
        </div>
    </div>
</div>


<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
