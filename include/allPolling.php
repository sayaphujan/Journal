<?php
	include"koneksi.php";
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * 5; 
	$sql = "SELECT * FROM jurnal WHERE publikasi='1' ORDER BY idJurnal DESC LIMIT $start_from, 5"; 
	$rs_result = mysql_query ($sql, $konek); 

	//$data=mysql_fetch_array($hasil);
	while ($data=mysql_fetch_aSSOC($rs_result)){
	//for($i=0;$i<count($data);$i++){	
		/*$id=$data['idJurnal'];
		$nama=$data['nama'];
		$judul=$data['judul'];
		$abstrak=$data['abstrak'];
		$mainname=$data['mainname'];*/
		//$supname=$data['supname'];
?>	
		<table width="550" border="0" cellpadding="10">
			<tr>
				<td><input type='hidden' name='idJurnal' value='<?php echo $data["idJurnal"] ;?>'></td>
			</tr>
			<tr>
				<td ><h1><center><b><?php echo $data["judul"] ;?></b></center></h1></td>
			</tr>
			<?php
			$sql45 = "select sum(jumlah)/4 as 'jumlah' from hasil WHERE idJurnal='".$data["idJurnal"]."'";
			$kueri45 = mysql_query($sql45);
			while($data45 = mysql_fetch_array($kueri45)){
			$jum=sprintf("%8.0f", ($data45["jumlah"]));
			?>
			<tr>
				<td >TOTAL RESPONDEN pada Jurnal ini adalah &nbsp;&nbsp;<b><u><?php echo $jum; ?></u></b> &nbsp;&nbsp;RESPONDEN</td>
			</tr>
			<?php } ?>
			<tr>
				<td ><a href='?v=hasil&id=<?php echo $data["idJurnal"]; ?>'> <u>Detail</u> </a></td>
			</tr>
			<?php } ?>
		</table><br>
	<?php
$sql = "SELECT COUNT(idJurnal) FROM jurnal"; 
$rs_result = mysql_query($sql,$konek); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 5); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='?v=hasilAll&page=".$i."'>".$i."</a> "; 
}

	?>