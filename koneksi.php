<?php

$host="localhost";
$user="root";
$password="";
$db="kalbar";


$kon = mysqli_connect($host,$user,$password);
if ($kon){
	echo "";
}else {
	echo"Database  MYSQL <b>gagal</b> dikoneksikan<br>";
}

$hasil=mysqli_select_db($kon,$db);
if ($hasil){
	echo header("");
}else {
	echo "Database $db gagal dipilih";
}
?>