<?php
	include"koneksi.php";
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * 5; 
	$sql = "SELECT * FROM jurnal ORDER BY idJurnal DESC LIMIT $start_from, 5"; 
	$rs_result = mysql_query ($sql, $konek); 

	//$data=mysql_fetch_array($hasil);
	while ($data=mysql_fetch_aSSOC($rs_result)){
	//for($i=0;$i<count($data);$i++){	
		$id=$data['idJurnal'];
		$nama=$data['nama'];
		$judul=$data['judul'];
		$abstrak=$data['abstrak'];
		/*$mainname=$data['mainname'];*/
		//$supname=$data['supname'];
?>	
	<br>
		<table width="550" border="0" cellpadding="10">
			<tr>
				<td ><h1><center><b><?php echo $judul ;?></b></center></h1></td>
			</tr>
			<tr>
				<td >by :&nbsp; <?php echo $nama;?></td>
			</tr>
			<tr>
				<td ><hr><h3><b>Abstrak</b></h3>
					<br>
					<p align="justify"></td>
			</tr>
			<tr>
				<td ><a href="main.php?v=list&id=<?php echo $id; ?>">Read More</a></td>
			</tr>
		</table><br>
	<?php	} 
$sql = "SELECT COUNT(idJurnal) FROM jurnal"; 
$rs_result = mysql_query($sql,$konek); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 5); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='main.php?v=listAll&page=".$i."'>".$i."</a> "; 
}; 

	?>