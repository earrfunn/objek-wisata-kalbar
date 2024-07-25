<?php 
	include 'koneksi.php';
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
    <script type="text/javascript" src="Assets/Chart.js"></script>
    <style type="text/css">
        body {
         
        }

        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            transition: opacity 200ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
        }

        .modalDialog > div {
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: linear-gradient(#fff, #aaa);
        }

        .close:hover {
            background: #00d9ff;
        }

        .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            text-align: center;
            top: -10px;
            right: -12px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 12px;
            box-shadow: 1px 1px 3px #000;
        }

        button {
            background-color: #000080;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

    </style>
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
<br>
<center><h3 style="margin: 20px 0">Grafik Pemesanan Tiket Objek Wisata Kalimantan Barat</h3><center>
<div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
</div>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Tugu Bambu Ptk", "Bukit Kelam", "Pulau Temajo", "Danau Sentarum", "Pantai Temajuk", "Pantai Temajuk"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_ca = mysqli_query($kon,"select * from beli where tmpwisata='1'");
					echo mysqli_num_rows($jumlah_ca);
					?>, 
					<?php 
					$jumlah_cp = mysqli_query($kon,"select * from beli where tmpwisata='2'");
					echo mysqli_num_rows($jumlah_cp);
					?>, 
					<?php 
					$jumlah_ks = mysqli_query($kon,"select * from beli where tmpwisata='3'");
					echo mysqli_num_rows($jumlah_ks);
					?>, 
                    <?php 
					$jumlah_ksi = mysqli_query($kon,"select * from beli where tmpwisata='4'");
					echo mysqli_num_rows($jumlah_ksi);
					?>, 
                    <?php 
					$jumlah_trms = mysqli_query($kon,"select * from beli where tmpwisata='5'");
					echo mysqli_num_rows($jumlah_trms);
					?>, 
                    <?php 
					$jumlah_cpk = mysqli_query($kon,"select * from beli where tmpwisata='6'");
					echo mysqli_num_rows($jumlah_cpk);
					?>, 
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
</script>


<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

</script>

</body>

</html>
