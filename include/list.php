<?php
	include"koneksi.php";
	session_start();
	$id=$_GET['id'];

// proses yang dilakukan setelah tombol submit komentar diklik
if ($_GET['act'] == "submit")
{
// membaca data komentar dari form
	$nama 			= $_POST['nama'];
	$url 			= $_POST['url'];
	$komentar 		= $_POST['komentar'];
	$id 			= $_POST['idJurnal'];
	$tglKomentar 	= date("Y-m-d");

	if((empty($nama)) || (empty($url)) || (empty($komentar))){
		echo"<script>
				window.alert('Harap isi kolom yang ada dengan lengkap');
				window.location('main.php?v=list&id=<?php echo $id; ?>');
			</script>";
	}else {
	$query = "SELECT * FROM komentar WHERE idJurnal = '$id'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	//Check for duplicate data
	if($komentar == $data['comment']) {
		echo"<script>
				window.alert('Komentar Sama Seperti yang sebelumnya');
				window.location('main.php?v=list&id=<?php echo $id; ?>');
			</script>";
	}
	else {
// proses insert komentar ke database
$query = "INSERT INTO komentar (idJurnal, commentator, urlComment, comment, commentDate) VALUES ('$id', '$nama', '$url', '$komentar', '$tglKomentar')";
$hasil = mysql_query($query);
	}
	}
	}
$detail="SELECT * FROM jurnal WHERE idJurnal='$id'"; 
$hasil=mysql_query($detail);
	//$data=mysql_fetch_array($hasil);
	while($data=mysql_fetch_array($hasil)){
	/*for($i=0;$i<count($data);$i++){	
		$id=$data['idJurnal'];
		$nama=$data['nama'];
		$judul=$data['judul'];
		$abstrak=$data['abstrak'];
		$mainname=$data['mainname'];
		$supname=$data['supname'];*/
	
	echo"
	<br>
		<table width=\"550\" border=\"0\" cellpadding=\"10\">
			<tr>
				<td ><h1><center><b>".$data['judul']."</b></center></h1></td>
			</tr>
			<tr>
				<td >by :&nbsp; ".$data['nama']."</td>
			</tr>
			<tr>
				<td ><hr><h3><b>Abstrak</b></h3>
					<br>
					<p align=\"justify\">".$data['abstrak']."</p></td>
			</tr>
			<tr>
				<td >FULL TEXT : &nbsp; <a href=\"../upload/".$data['mainname']."\" target=\"".$data['mainname']."\"><font color=blue>".$data['mainname']."</a></td>
			</tr>
		</table><br>";
}?>
<hr>
<table width='100%'>
<?php
if($_SESSION[level]!=''){
echo"
<tr>
	<td bgcolor='#ff9801' valign='b'><h5><b>Silakan isi Komentar Anda dibawah ini atau isi Polling <a href='main.php?v=polling&id=$id'><u>disini</u></a> atau Lihat hasilnya<a href='main.php?v=hasil&id=$id'> <u>disini</u> </a></b></h5></td>
</tr>
";
}
?>
</table>
<?php
// proses menampilkan komentar berdasarkan id artikelnya
echo "<h3>Komentar</h3>";
$query = "SELECT * FROM komentar WHERE idJurnal = '$id' ORDER BY idComment ASC";
$hasil = mysql_query($query);
if (mysql_num_rows($hasil) > 0) {
	// jika ada komentar (jumlah data hasil query > 0), maka tampilkan komentarnya
	while ($data = mysql_fetch_array($hasil))
	{
		echo "<p><small>Dikirim oleh: ".$data['commentator']." (<a href='".$data['urlComment']."'>".$data['urlComment']."</a>), Tanggal: ".$data['commentDate']."</small></p>";
		echo "<p>".$data['comment']."</p><hr>";
		}
}
// jika tidak ada komentar (jumlah data hasil query = 0), tampilkan keterangan belum ada komentar
else if (mysql_num_rows($hasil) == 0) echo "<p>Belum ada komentar.</p>";

// menampilkan form pengisian komentar
 
echo "<h3>Kirim Komentar</h3>";
echo "<form method='post' action='main.php?v=list&id=$id&act=submit'>";
echo "<table>";
echo "<tr>
		<td>Nama Anda</td>
		<td>:</td>
		<td><input type='hidden' name='nama' size='25' value='".$_SESSION[nama]."'>&nbsp;&nbsp;&nbsp;".$_SESSION[nama]."</td>
	</tr>";
echo "<tr>
		<td>URL Anda</td>
		<td>:</td>
		<td><input type='text' name='url' size='25'></td>
	</tr>";
echo "<tr>
		<td valign='top'>Komentar Anda</td>
		<td valign='top'>:</td>
		<td>&nbsp;&nbsp;<textarea name='komentar' col='25' rows='5'></textarea></td>
	</tr>";
echo "<tr>
		<td></td>
		<td></td>
		<td><input type='submit' name='submit' value='Submit'>
		<input type='hidden' name='idJurnal' value='".$id."'></td>
		</tr>";
echo "</table>";
echo "</form>";
?>