<?php
include"../koneksi.php";
$id1		= $_POST['id1'];
$id2		= $_POST['id2'];
$id3		= $_POST['id3'];
$id4		= $_POST['id4'];
$id5		= $_POST['id5'];
$topik1		= $_POST['topik1'];
$topik2		= $_POST['topik2'];
$topik3		= $_POST['topik3'];
$topik4		= $_POST['topik4'];
$topik5		= $_POST['topik5'];
$p1			= $_POST['1'];
$p2			= $_POST['2'];
$p3			= $_POST['3'];
$p4			= $_POST['4'];
$p5			= $_POST['5'];
$p6			= $_POST['6'];
$p7			= $_POST['7'];
$p8			= $_POST['8'];
$p9			= $_POST['9'];
$p10		= $_POST['10'];
$p11		= $_POST['11'];
$p12		= $_POST['12'];
$p13		= $_POST['13'];
$p14		= $_POST['14'];
$p15		= $_POST['15'];
$p16		= $_POST['16'];
$p17		= $_POST['17'];
$p18		= $_POST['18'];
$p19		= $_POST['19'];
$p20		= $_POST['20'];
$p21		= $_POST['21'];
$p22		= $_POST['22'];
$p23		= $_POST['23'];
$p24		= $_POST['24'];
$p25		= $_POST['25'];
$jumlah=0;

								$simpan=("INSERT INTO topik (idTopik, topik) VALUES ('$id1', '$topik1'), ('$id2', '$topik2'), ('$id3', '$topik3'), ('$id4', '$topik4'), ('$id5', '$topik5') ON DUPLICATE KEY UPDATE topik=VALUES(topik)");
									$sukses=mysql_query($simpan,$konek);
									
										$simpan1=("insert into polling (id, kategori, idTopik, jumlah) VALUES ('1','$p1', '$id1','$jumlah'),('2','$p2', '$id1','$jumlah'),('3','$p3', '$id1','$jumlah'),('4','$p4', '$id1','$jumlah'),('5','$p5', '$id1','$jumlah'), ('6','$p6', '$id2','$jumlah'),('7','$p7', '$id2','$jumlah'),('8','$p8', '$id2','$jumlah'),('9','$p9', '$id2','$jumlah'),('10','$p10', '$id2','$jumlah'), ('11','$p11', '$id3','$jumlah'),('12','$p12', '$id3','$jumlah'),('13','$p13', '$id3','$jumlah'),('14','$p14', '$id3','$jumlah'),('15','$p15', '$id3','$jumlah'), ('16','$p16', '$id4','$jumlah'),('17','$p17', '$id4','$jumlah'),('18','$p18', '$id4','$jumlah'),('19','$p19', '$id4','$jumlah'),('20','$p20', '$id4','$jumlah'),('21','$p21', '$id5','$jumlah'),('22','$p22', '$id5','$jumlah'),('23','$p23', '$id5','$jumlah'),('24','$p24', '$id5','$jumlah'),('25','$p25', '$id5','$jumlah') ON DUPLICATE KEY UPDATE kategori=VALUES(kategori),idTopik=VALUES(idTopik)");
											$sukses1=mysql_query($simpan1,$konek);
											
											if($sukses && $sukses1){
												echo"<script>window.alert('Polling Berhasil Disimpan');
													window.location=('../main.php')</script>";	
												}else{
													/*echo"<script>window.alert('Input Polling Gagal');
													window.location=('../index.php?v=poll')</script>";	*/
													echo mysql_error();
												}
								