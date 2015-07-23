<?php
include "../koneksi.php";
$idJ 	= $_POST['idJurnal'];
$d1 	= $_POST['id1'];
$d2 	= $_POST['id2'];
$d3 	= $_POST['id3'];
$d4 	= $_POST['id4'];
$id1 	= $_POST['1'];
$id2 	= $_POST['2'];
$id3 	= $_POST['3'];
$id4 	= $_POST['4'];

if($id1=='' || $id2=='' || $id3 =='' || $id4==''){
	echo"<script>window.alert('Harap lengkapi pilihan Anda');
				window.location=('../main.php?v=polling&id=$idJ')</script>";
				}else {
/*$sql="INSERT INTO hasil (idHasil, idJurnal, idTopik, id, jumlah) VALUES ('','$idJ', '$d1', '$id1','0'),('','$idJ', '$d1', '$id2','0'),('','$idJ', '$d1', '$id3','0'),('','$idJ', '$d1', '$id4','0'),
																		('','$idJ', '$d2', '$id1','0'),('','$idJ', '$d2', '$id2','0'),('','$idJ', '$d2', '$id3','0'),('','$idJ', '$d2', '$id4','0'),
																		('','$idJ', '$d3', '$id1','0'),('','$idJ', '$d3', '$id2','0'),('','$idJ', '$d3', '$id3','0'),('','$idJ', '$d3', '$id4','0'),
																		('','$idJ', '$d4', '$id1','0'),('','$idJ', '$d4', '$id2','0'),('','$idJ', '$d4', '$id3','0'),('','$idJ', '$d4', '$id4','0')";*/

$sql="INSERT INTO hasil (idHasil, idJurnal, idTopik, id, jumlah) VALUES ('','$idJ', '$d1', '$id1','0'),
																		('','$idJ', '$d2', '$id2','0'),
																		('','$idJ', '$d3', '$id3','0'),
																		('','$idJ', '$d4', '$id4','0')";																		
$query=mysql_query($sql, $konek);
if($query){
$kueri_ambil = mysql_query("select * from hasil where id = '$id1' || id='$id2' || id='$id3' || id='$id4'");
$data_ambil = mysql_fetch_array($kueri_ambil);
$tambahin = $data_ambil['jumlah'];
$kueri_update = mysql_query("update hasil set jumlah = '$tambahin' where id = '$id1' || id='$id2' || id='$id3' || id='$id4'");
echo"<script>window.alert('TERIMAKASIH UNTUK SUARA ANDA');
						window.location=('../main.php?v=hasil&id=".$idJ."')</script>";
		}else{
			echo"<script>window.alert('GAGAL');
						window.location=('../main.php?v=hasil&id=".$idJ."')</script>";
						}
						}
?>