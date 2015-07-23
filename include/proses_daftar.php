<?php
include"../koneksi.php";
session_start();
$baca=mysql_query("select user from anggota where user='$user'");
$no=mysql_num_rows($baca);

$user	= $_POST['user'];
$pass	= $_POST['pass'];
$nama	= $_POST['nama'];
$TglLhr	= $_POST['TglLhr'];
$alamat	= $_POST['alamat'];
$email	= $_POST['email'];
$status	= $_POST['status'];
$level	= $_POST['level'];
$act	= $_POST['act'];

if($_SESSION[level]!='4'){
if(empty($user)){
	echo"<script>window.alert('User ID belum diisi');
		window.location=('../index.php?v=reg')</script>";
	}elseif(empty($pass)){
		echo"<script>window.alert('Password belum diisi');
			window.location=('../index.php?v=reg')</script>";
		} elseif(empty($nama)){
			echo"<script>window.alert('Nama belum diisi');
				window.location=('../index.php?v=reg')</script>";
			} elseif(empty($TglLhr)){
				echo"<script>window.alert('Tanggal Lahir belum diisi');
					window.location=('../index.php?v=reg')</script>";
				} elseif(empty($alamat)){
					echo"<script>window.alert('Alamat belum diisi');
						window.location=('../index.php?v=reg')</script>";
					} elseif(empty($email)){
						echo"<script>window.alert('Email belum diisi');
							window.location=('../index.php?v=reg')</script>";
						} elseif($status==""){
							echo"<script>window.alert('Status belum dipilih');
								window.location=('../index.php?v=reg')</script>";
							/*}elseif($level==""){
								echo"<script>window.alert('Level belum dipilih');
									window.location=('../index.php?v=reg')</script>";*/
								}elseif($email && (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$",$email))){
									echo"<script>window.alert('Email tidak valid');
										window.location=('../index.php?v=reg')</script>";
									}elseif($no!== 0){
										echo"<script>window.alert('User telah terdaftar. Silakan pilih User ID yang lain');
											window.location=('../index.php?v=reg')</script>";	
											}else{
											
											$post="0";
											$simpan=("insert into anggota SET user='$user',pass='$pass',nama='$nama',TglLhr='$TglLhr',alamat='$alamat',email='$email',status='$status',level=1, aktivasi='1'");
											$sukses=mysql_query($simpan,$konek);
											
											if($sukses){
												echo"<script>window.alert('Registrasi Berhasil.Silakan Login');
													window.location=('../index.php')</script>";	
												}else{
													echo"<script>window.alert('Registrasi Gagal');
													window.location=('../index.php?v=reg')</script>";	
												}
												
											}
}elseif($_SESSION[level]=='4'){
if(empty($user)){
	echo"<script>window.alert('User ID belum diisi');
		window.location=('../main.php?v=reg')</script>";
	}elseif(empty($pass)){
		echo"<script>window.alert('Password belum diisi');
			window.location=('../main.php?v=reg')</script>";
		} elseif(empty($nama)){
			echo"<script>window.alert('Nama belum diisi');
				window.location=('../main.php?v=reg')</script>";
			} elseif(empty($TglLhr)){
				echo"<script>window.alert('Tanggal Lahir belum diisi');
					window.location=('../main.php?v=reg')</script>";
				} elseif(empty($alamat)){
					echo"<script>window.alert('Alamat belum diisi');
						window.location=('../main.php?v=reg')</script>";
					} elseif(empty($email)){
						echo"<script>window.alert('Email belum diisi');
							window.location=('../main.php?v=reg')</script>";
						} elseif($status==""){
							echo"<script>window.alert('Status belum dipilih');
								window.location=('../main.php?v=reg')</script>";
							}elseif($level==""){
								echo"<script>window.alert('Level belum dipilih');
									window.location=('../main.php?v=reg')</script>";
								}elseif($email && (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$",$email))){
									echo"<script>window.alert('Email tidak valid');
										window.location=('../main.php?v=reg')</script>";
									}elseif($no!== 0){
										echo"<script>window.alert('User telah terdaftar. Silakan pilih User ID yang lain');
											window.location=('../main.php?v=reg')</script>";	
											}else{
											
											$post="0";
											$sql=("insert into anggota SET user='$user',pass='$pass',nama='$nama',TglLhr='$TglLhr',alamat='$alamat',email='$email',status='$status',level='$level', aktivasi='$act'");
											$query=mysql_query($sql,$konek);
											
											if($query){
												echo"<script>window.alert('Penambahan User Berhasil');
													window.location=('../main.php?v=listMember')</script>";	
												}else{
													echo"<script>window.alert('Registrasi Gagal');
													window.location=('../main.php?v=reg')</script>";	
												}
												
											}
}
?>