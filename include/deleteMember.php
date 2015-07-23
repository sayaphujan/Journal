<?php
include"../koneksi.php";

$user = $_GET['user'];
$query = "DELETE from anggota WHERE user='$user'";
mysql_query($query);
echo"<script>window.alert('Data berhasil dihapus');
		window.location=('main.php?v=listMember')</script>";
?>