<?
session_start();
$pass=$_POST['pw_lama'];
$pw_baru1=$_POST['pw_baru1'];
$pw_baru2=$_POST['pw_baru2'];
include"../koneksi.php";
	$quser=mysql_query("select * from anggota where user='$_SESSION[user]'",$konek);
	$juser=mysql_num_rows($quser);
	$ruser=mysql_fetch_array($quser);

	if ($pass==""){
	echo"<script>window.alert('Password lama belum diisi');
			window.location=('../main.php?v=change')</script>";
	} elseif ($pw_baru1==""){
		echo"<script>window.alert('Password Baru belum diisi');
			window.location=('../main.php?v=change')</script>";
		} else if ($pw_baru2==""){
			echo"<script>window.alert('Password baru belum diisi');
				window.location=('../main.php?v=change')</script>";
			} elseif ($ruser[pass]!==$pass)
					{
						//echo"<div>Password Lama salah </div>";
					echo"<script>window.alert('Password lama SALAH');
						window.location=('../main.php?v=change')</script>";
					} else if ($pw_baru1!=$pw_baru2)
							{
								//echo"<div> Penulisan password baru tidak sama</div>";
									echo"<script>window.alert('Penulisan Password baru tidak sama');
										window.location=('../main.php?v=change')</script>";
							} else {
								mysql_query("UPDATE anggota SET pass='$pw_baru1' where user='$_SESSION[user]'", $konek);
								//echo"<div> Password sudah diganti</div>";
									echo"<script>window.alert('Password sudah diganti. Silakan Login');
										window.location=('../index.php')</script>";
								session_unset();
								session_destroy();
							}
?>
