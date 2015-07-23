<?php
	include"../koneksi.php";
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * 5; 
	$sql = "SELECT * FROM anggota ORDER BY user DESC LIMIT $start_from, 5"; 
	$rs_result = mysql_query ($sql, $konek); 
	
	//$data=mysql_fetch_array($hasil);
	while ($data=mysql_fetch_assoc($rs_result)){
	//for($i=0;$i<count($data);$i++){	
		$user=$data['user'];
		$pass=$data['pass'];
		$nama=$data['nama'];
		$TglLhr=$data['TglLhr'];
		$alamat=$data['alamat'];
		$email=$data['email'];
		$status=$data['status'];
			$mhsSTIEM='Mahasiswa STIEM Pekalongan';
			$dosenSTIEM='Dosen STIEM Pekalongan';
			$mhsLuar='Mahasiswa Luar STIEM Pekalongan';
			$dosenLuar='Dosen Luar STIEM Pekalongan';
			$lain='lainnya';
			if($status=='mhsSTIEM'){
				$status=$mhsSTIEM;
				} elseif($status=='dosenSTIEM'){
					$status=$dosenSTIEM;
					} elseif($status=='mhsLuar'){
						$status=$mhsLuar;
						}elseif($status=='dosenLuar'){
							$status=$dosenLuar;
							}else{
								$lain;
							}
		$level=$data['level'];
			$Luser='User';
			$Lauthor='Author';
			$Leditor='Editor';
			$Ladmin='Web Master';
			//$lain='lainnya';
			if($level=='1'){
				$level=$Luser;
				} elseif($level=='2'){
					$level=$Lauthor;
					} elseif($level=='3'){
						$level=$Leditor;
						}elseif($level=='4'){
							$level=$Ladmin;
							}
		$aktivasi=$data['aktivasi'];
			$yes='Aktif';
			$no='Tidak Aktif';
			if($aktivasi=='1'){
				$aktivasi=$yes;
				} else {
					$aktivasi=$no;
				}
	
	echo"
	<br>
		<table width=\"550\" border=\"0\" cellpadding=\"10\">
			<tr>
				<td width=\"30%\" bgcolor=\"#ff9801\">User ID</td>
				<td width=\"100%\" bgcolor=\"#d5d5d5\">$user</td>
			</tr>
			<tr>
				<td bgcolor=\"#ff9801\">Password</td>
				<td bgcolor=\"#e5e5e5\">$pass</td>
			</tr>
			<tr>
				<td valign=\"top\" bgcolor=\"#ff9801\">Nama Lengkap</td>
				<td bgcolor=\"#d5d5d5\">$nama</td>
			</tr>
			<tr>
				<td valign=\"top\" bgcolor=\"#ff9801\">Tanggal Lahir</td>
				<td bgcolor=\"#e5e5e5\">$TglLhr</td>
			</tr>
			<tr>
				<td valign=\"top\" bgcolor=\"#ff9801\">Alamat</td>
				<td bgcolor=\"#d5d5d5\">$alamat</td>
			</tr>
			<tr>
				<td valign=\"top\" bgcolor=\"#ff9801\">Email</td>
				<td bgcolor=\"#e5e5e5\">$email</td>
			</tr>
			<tr>
				<td bgcolor=\"#ff9801\">Status</td>
				<td bgcolor=\"#d5d5d5\">$status</td>
			</tr>
			<tr>
				<td valign=\"top\" bgcolor=\"#ff9801\">Level</td>
				<td bgcolor=\"#e5e5e5\">$level</td>
			</tr>
			<tr>
				<td bgcolor=\"#ff9801\">Aktivasi</td>
				<td bgcolor=\"#d5d5d5\"><b><i>$aktivasi</i></b></td>
			</tr>
			<tr>
				<td bgcolor=\"#ff9801\">Detail</td>
				<td bgcolor=\"#e5e5e5\">&nbsp;<a href=\"main.php?v=updateMem&user=$user\">Ubah</a>
										&nbsp;&nbsp;&nbsp;&nbsp;<a href='main.php?v=deleteMem&user=" .$user. "' onClick=\"return confirm('Anda yakin akan menghapus data ini ?')\">Hapus</a></td>
			</tr>
		</table><br>";
		} 
		/*	$tampilId="SELECT idJurnal, judul FROM jurnal";
	$query=mysql_query($tampilId);
	while($hasil=mysql_fetch_array($query))*/
$sql = "SELECT COUNT(user) FROM anggota"; 
$rs_result = mysql_query($sql,$konek); 
$data = mysql_fetch_row($rs_result); 
$total_records = $data[0]; 
$total_pages = ceil($total_records / 5); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='main.php?v=listMember&page=".$i."'>".$i."</a>";
}; 
?>