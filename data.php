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

<!-- isi -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <center><H3 style="margin: 40px 0">DAFTAR PESANAN TIKET</H3></center>
            <div class="panel-body">
                <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                    <!-- penambahan sebuah tabel untuk memasukan isi database -->
                    <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Nomor Identitas</th>
                        <th>Nomer Hp</th>
                        <th>Nama Wisata</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Pengunjung Dewasa</th>
                        <th>Pengunjung Anak</th>
                        <th>Total Harga</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                        <!--ambil data dari database, dan tampilkan kedalam tabel-->
                        <?php
                        $sql = "SELECT * FROM beli";
                        $query = mysqli_query($kon, $sql) or die("Database Anda Salah");
                        $nomor = 0;
                        //Melakukan perulangan u/menampilkan data
                        while ($data = mysqli_fetch_array($query)) {
                        $nomor++; //Penambahan satu untuk nilai var nomor
                       
                        if ($data['tmpwisata'] == 1) {
                            $tmpwisata = "Candi Arjuna";
                        } else if ($data['tmpwisata'] == 2) {
                            $tmpwisata = "Curug Pitu";
                        } else if ($data['tmpwisata'] == 3) {
                            $tmpwisata = "Kawah Sikidang";
                        } else if ($data['tmpwisata'] == 4) {
                            $tmpwisata = "Kawah Sileri";
                        } else if ($data['tmpwisata'] == 5) {
                            $tmpwisata = "Taman Rekreasi Marga Satwa Serulingmas";
                        } else if ($data['tmpwisata'] == 6) {
                            $tmpwisata = "Curug Pletuk";
                        }

                        ?>
                            <tr>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['noid'] ?></td>
                                <td><?= $data['nohp'] ?></td>
                                <td><?= $tmpwisata?></td>
                                <td><?= $data['tgl'] ?></td>
                                <td><?= $data['pdewasa'] ?></td>
                                <td><?= $data['panak'] ?></td>
                                <td>Rp. <?= $data['total'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $data['id_beli'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="hapus.php?id=<?php echo $data['id_beli'] ?>" class="btn btn-danger btn-xs">Hapus</a>
                                    <a href="detail.php?id=<?php echo $data['id_beli'] ?>" class="btn btn-info btn-xs">Detail</a>
                                </td>
                            </tr>
                            <!--Tutup Perulangan data-->
                        <?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Author Start -->
</div>
<div class="service-item">
    <div class="service-img mx-auto">
        <img class="rounded-circle w-100 h-100 bg-light p-3" src="https://tse1.mm.bing.net/th?id=OIP.CVWAqbKvB8A3VqJhpyHPswHaEK&pid=Api&P=0&h=180" style="object-fit: cover;">
</div>
<div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Gojo Satoru</h5>
    <p>Website Objek wisata Kalimantan Barat adalah website yang dibuat untuk membantu para turis lokal dan turis asing dalam memilih tempat wisata yang ada di Kalimantan Barat,
        Website ini memiliki banyak kelebihan diantaranya yaitu sistem booking tiket untuk tempat wisata yang mempunyai proses yang lebih mudah.</p>
</div>
<!-- Author End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary"></span>Objek Wisata</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">Kalimantan Barat, Indonesia</p>
                            <p class="mb-0">+6281234567890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Operation Time</h5>
                            <p class="mb-2">Mon – Sat : 8AM – 4PM</p>
                            <p class="mb-0">Sunday : 8AM - 3PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


<!-- isi -->

<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>


</script>

</body>

</html>
