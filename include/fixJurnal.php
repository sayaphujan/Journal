<?php
include "../koneksi.php";
session_start();
$id=$_REQUEST['id'];
	$idJurnal		= $_POST['idJurnal'];
	$nama 			= $_POST['nama'];
	$judul 			= $_POST['judul'];
	$abstrak 		= $_POST['abstrak'];
	$kategori		= $_POST['isi_kategori'];
	$key			= $_POST['key'];
	$bulan			= $_POST['bulan'];
	$tahun			= $_POST['tahun'];
	$auth			= $_POST['author'];
	$public			= $_POST['public'];

if($nama=='' || $judul=='' || $abstrak=='' || $kategori=='' || $key=='' || $bulan=='-' || $tahun =='-' || $_FILES['mainfile']['name']=='' || $public==''){
	echo"<script>window.alert('Data tidak lengkap');
				window.location=('../main.php?v=update&id=$idJurnal')</script>";
	}
	//$target.=$_FILES['userfile']['name'];
	$fileName1.=$_FILES['mainfile']['name'];
	$tmpName1.=$_FILES['mainfile']['tmp_name'];
	$fileSize1.=$_FILES['mainfile']['size'];
	$fileType1.=$_FILES['mainfile']['type'];
	$target1.="../upload/$fileName1";
	//$fileName = $target . basename($_FILES['user_file']['name']);
	move_uploaded_file($_FILES['mainfile']['tmp_name'],$target1);
	
	//$target.=$_FILES['userfile']['name'];
	$fileName2.=$_FILES['supfile']['name'];
	$tmpName2.=$_FILES['supfile']['tmp_name'];
	$fileSize2.=$_FILES['supfile']['size'];
	$fileType2.=$_FILES['supfile']['type'];
	$target2.="../upload/$fileName2";
	//$fileName = $target . basename($_FILES['user_file']['name']);
	move_uploaded_file($_FILES['supfile']['tmp_name'],$target2);

					
				//$sql_simpan="INSERT INTO jurnal (idJurnal, nama, judul, abstrak, keyword, kategori, issue, name, type, size, content) VALUES ('','$nama','$judul','$abstrak', '$key', '$kategori','$issue','$fileName','$fileSize','$fileType','$content')";
				$issue="$bulan $tahun";
				//memastikan file tdk kosong
				$sql_simpan="UPDATE jurnal SET nama='$nama', judul='$judul', abstrak='$abstrak', keyword='$key', kategori='$kategori', issue='$issue', author='$auth', mainname='$fileName1', maintype='$fileType1', mainsize='$fileSize1', maincontent='$content1', supname='$fileName2', suptype='$fileType2', supsize='$fileSize2', supcontent='$content2', publikasi='$public' WHERE idJurnal='$idJurnal'";
				mysql_query($sql_simpan, $konek) or die ("Simpan data gagal".mysql_error());
				echo"<script>window.alert('Data Berhasil Disimpan');
							window.location=('../main.php?v=listMain')</script>";
							