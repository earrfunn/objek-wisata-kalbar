<?php
include('koneksi.php');

$sql = "DELETE FROM beli WHERE id_beli ='" . $_GET['id'] . "'";
$query = mysqli_query($kon, $sql) or die ("SQL Hapus Error");
if ($query) {
    echo "<script> window.location.assign('data.php');</script>";
} else {
    echo "<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=pemesanan&actions=tampil');</scripr>";
}

