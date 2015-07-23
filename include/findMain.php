<?php
include"koneksi.php";
$key=$_POST['key'];
$kategori=$_POST['kategori'];

if($kategori=='#'){
	echo"<script>window.alert('Anda belum memilih kriteria pencarian');
				window.location('../index.php')</script>";
}else{
		$sql="SELECT * FROM jurnal WHERE $kategori like '%$key%' AND publikasi='1' ORDER BY idJurnal DESC"; 
		$rs_result = mysql_query ($sql, $konek); 

	//$data=mysql_fetch_array($hasil);
	while ($data=mysql_fetch_assoc($rs_result)){
	//for($i=0;$i<count($data);$i++){	
		/*$id=$data['idJurnal'];
		$nama=$data['nama'];
		$judul=$data['judul'];
		$abstrak=$data['abstrak'];
		$mainname=$data['mainname'];*/
		//$supname=$data['supname'];
?>	
	<br>
		<table width="550" border="0" cellpadding="10">
			<tr>
				<td ><h1><center><b><?php echo $data["judul"] ;?></b></center></h1></td>
			</tr>
			<tr>
				<td >by :&nbsp; <?php echo $data["nama"];?></td>
			</tr>
			<tr>
				<td ><hr><h3><b>Abstrak</b></h3>
					<br>
					<p align="justify">
					<?php
					echo substr($data["abstrak"], 0, 1000);
					?>
					</td>
			</tr>
			<tr>
				<td ><a href="?v=list&id=<?php echo $data["idJurnal"]; ?>">Baca Selengkapnya>></a></td>
			</tr>
		</table><br>
	<?php	}
	}
	?>