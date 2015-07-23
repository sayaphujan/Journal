<?php
include"../koneksi.php";

$id = $_GET['id'];
$query = "DELETE from jurnal WHERE idJurnal='$id'";
mysql_query($query);
echo"<script>window.alert('Data berhasil dihapus');
		window.location=('main.php?v=listMain')</script>";
?>