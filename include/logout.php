<?
include"../koneksi.php";
//function start lagi
session_start();
//cek apakah session terdaftar
if(session_is_registered('user')){
//session terdaftar, saatnya logout
session_unset();
session_destroy();
	echo"<script>window.alert('T E R I M A   K A S I H ^_^');
		window.location=('index.php')</script>";
}
?>