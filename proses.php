<?php
include "koneksi.php";

$nama=$_POST["nama"];
$noid=$_POST["noid"];
$nohp=$_POST["nohp"];
$tmpwisata=$_POST["tmpwisata"];
$tgl=$_POST["tgl"];
$pdewasa=$_POST["pdewasa"];
$panak=$_POST["panak"];

if ($tmpwisata == 1) {
	$harga = 15000;
} else if ($tmpwisata == 2) {
	$harga = 5000;
} else if ($tmpwisata == 3) {
	$harga = 15000;
} else if ($tmpwisata == 4) {
	$harga = 5000;
} else if ($tmpwisata == 5) {
	$harga = 20000;
} else if ($tmpwisata == 6) {
	$harga = 5000;
}



$total= ($pdewasa*$harga)+$panak*$harga*0.5;

//Query input menginput data kedalam tabel pesan
  $sql="insert into hitung (nama,noid,nohp,tmpwisata,tgl,pdewasa,panak,harga,total) values
		('$nama','$noid','$nohp','$tmpwisata','$tgl','$pdewasa','$panak','$harga','$total')";
		

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo header('Location: totalbayar.php');
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  
?>