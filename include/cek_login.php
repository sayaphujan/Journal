<?php
session_start();
include"../koneksi.php";
$user=$_POST['user'];
$pass=$_POST['pass'];

if(!$user || !$pass) {
	echo"<script>window.alert('Isian Belum Lengkap');
				window.location=('../index.php')</script>";	
} else {
	$quser=mysql_query("select * from anggota where user='$user' AND pass='$pass'");
	if(mysql_num_rows($quser)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($quser);
		session_register("user");
		session_register("nama");
        $_SESSION['user'] = $c['user'];
		$_SESSION['nama'] = $c['nama'];
		$_SESSION['level'] = $c['level'];
        $_SESSION['aktivasi'] = $c['aktivasi'];
        if($c['aktivasi']==1){
		//dan jika terdaftar
            echo"<script>window.alert('Selamat Datang ".$c['nama']."');
				window.location=('../main.php')</script>";	
        }else if($c['aktivasi']==''){
		//jika tidak terdaftar, kembalikan user ke login
            echo"<script>window.alert(' Akun belum Aktif. Hubungi Web Master');
					window.location=('../index.php')</script>";
        }
    }else{
        echo"<script>window.alert('User atau password tidak sesuai');
			window.location=('../index.php')</script>";
    }}
?>