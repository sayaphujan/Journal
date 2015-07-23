<?php
include"../koneksi.php";
session_start();
$baca=mysql_query("select user from anggota where user='$user'");
$no=mysql_num_rows($baca);
$user=$_POST['user'];
$pass=$_POST['pass'];
$nama=$_POST['nama'];
$TglLhr=$_POST['TglLhr'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$status=$_POST['status'];
$level=$_POST['level'];
$aktivasi=$_POST['act'];

if(empty($user)){
	echo"<script>window.alert('User ID belum diisi');
		window.location=('../main.php?v=updateMem&user=$user')</script>";
	}elseif(empty($pass)){
		echo"<script>window.alert('Password belum diisi');
			window.location=('../main.php?v=updateMem&user=$user')</script>";
		} elseif(empty($nama)){
			echo"<script>window.alert('Nama belum diisi');
				window.location=('../main.php?v=updateMem&user=$user')</script>";
			} elseif(empty($TglLhr)){
				echo"<script>window.alert('Tanggal Lahir belum diisi');
					window.location=('../main.php?v=updateMem&user=$user')</script>";
				} elseif(empty($alamat)){
					echo"<script>window.alert('Alamat belum diisi');
						window.location=('../main.php?v=updateMem&user=$user')</script>";
					} elseif(empty($email)){
						echo"<script>window.alert('Email belum diisi');
							window.location=('../main.php?v=updateMem&user=$user')</script>";
						} elseif($status==""){
							echo"<script>window.alert('Status belum dipilih');
								window.location=('../main.php?v=updateMem&user=$user')</script>";
							}elseif($level==""){
								echo"<script>window.alert('Level belum dipilih');
									window.location=('../main.php?v=updateMem&user=$user')</script>";
								}elseif($email && (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$",$email))){
									echo"<script>window.alert('Email tida valid');
										window.location=('../main.php?v=updateMem&user=$user')</script>";
									}elseif($aktivasi==""){
								echo"<script>window.alert('Aktivasi belum dipilih');
									window.location=('../main.php?v=updateMem&user=$user')</script>";
								}else{
											
											$post="0";
											$simpan="UPDATE anggota SET pass='$pass', nama='$nama', TglLhr='$TglLhr', alamat='$alamat', email='$email', status='$status', level='$level', aktivasi='$aktivasi' WHERE user='$user'";
											$sukses=mysql_query($simpan,$konek);

											if($sukses){
												echo"<script>window.alert('Pembaharuan Akun User Berhasil');
													window.location=('../main.php?v=listMember')</script>";	
												}else{
													echo"<script>window.alert('Pembaharuan Akun User Gagal');
													window.location=('../main.php?v=updateMem&user=$user')</script>";	
												}

											}
?>