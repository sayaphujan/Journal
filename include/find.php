<?php
include"koneksi.php";
$key=$_POST['key'];
$kategori=$_POST['kategori'];
if($kategori=='#'){
	echo"<script>window.alert('Anda belum memilih kriteria pencarian');
				window.location('../main.php')</script>";
}else{
if($_SESSION[level]!='2' && $_SESSION[level]!='1'){
		$sql1="SELECT * FROM jurnal WHERE $kategori like '%$key%' ORDER BY idJurnal DESC";
		$query1=mysql_query($sql1,$konek);
		while ($data1=mysql_fetch_assoc($query1)){
				$id1=$data1['idJurnal'];
				$nama1=$data1['nama'];
				$judul1=$data1['judul'];
				$abstrak1=$data1['abstrak'];
				$key1=$data1['keyword'];
				$kategori1=$data1['kategori'];

					$AK1='Akuntansi';
					$EI1='Ekonomi Islam';
					$MAN1='Manajemen';
					$lain1='Lainnya';
					if($kategori1=='AK'){
						$kategori1=$AK1;
						} elseif($kategori1=='EI'){
							$kategori1=$EI1;
							} elseif($kategori1=='MAN'){
								$kategori1=$MAN1;
								}else{
									$lain1;
								}
				
					$bulan1= substr($data1['issue'],0,3);
					$jan1='Januari'; $feb1='Februari'; $mar1='Maret'; $apr1='April'; $mei1='Mei'; $jun1='Juni';
					$jul1='Juli'; $aug1='Agustus'; $sep1='September'; $okt1='Oktober'; $nov1='November'; $des1='Desember';
					if($bulan1=='jan'){
						$bulan1=$jan1;
						}elseif($bulan1=='feb'){
							$bulan1=$feb1;
							}elseif($bulan1=='mar'){
								$bulan1=$mar1;
								}elseif($bulan1=='apr'){
									$bulan1=$apr1;
									}elseif($bulan1=='mei'){
										$bulan1=$mei1;
										}elseif($bulan1=='jun'){
											$bulan1=$jun1;
											}elseif($bulan1=='jul'){
												$bulan1=$jul1;
												}elseif($bulan1=='aug'){
													$bulan1=$aug1;
													}elseif($bulan1=='sept'){
														$bulan1=$sept1;
															}elseif($bulan1=='okt'){
																$bulan1=$okt1;
																	}elseif($bulan1=='nov'){
																		$bulan1=$nov1;
																		}elseif($bulan1=='des'){
																			$bulan1=$des1;
																			}
																			
				$tahun1= substr($data1['issue'],4,4);
				$issue1=("$bulan1 $tahun1");
				
				$auth1=$data1['author'];
				$mainname1=$data1['mainname'];
				$supname1=$data1['supname'];
				$publikasi1=$data1['publikasi'];
				
					$yes1='Dipublikasi';
					$no1='Menunggu Persetujuan Web Master';
					if($publikasi1=='1'){
						$publikasi1=$yes1;
						} else {
							$publikasi1=$no1;
						}
	
	echo"
	<br>
		<table width='550' border='0' cellpadding='10'>
			<tr>
				<td width='30%' bgcolor='#ff9801'>No</td>
				<td width='70%' bgcolor='#d5d5d5'>$id1</td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Nama Peneliti</td>
				<td bgcolor='#e5e5e5'>$nama1</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Judul</td>
				<td bgcolor='#d5d5d5'>$judul1</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801' >Abstrak</td>
				<td bgcolor='#e5e5e5'>$abstrak1</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Keyword</td>
				<td bgcolor='#d5d5d5'>$key1</td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Kategori</td>
				<td bgcolor='#e5e5e5'>$kategori1</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Issue</td>
				<td bgcolor='#d5d5d5'>$issue1</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Author</td>
				<td bgcolor='#e5e5e5'>$auth1</td>
			</tr>
				<td bgcolor='#ff9801'>File Utama</td>
				<td bgcolor='#d5d5d5'><a href='../upload/$mainname1' target='$mainname1'><font color=blue>$mainname1</a></td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>File Pendukung</td>
				<td bgcolor='#e5e5e5'><a href='../upload/$supname1' target='$supname1'><font color=blue>$supname1</a></td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Publikasi</td>
				<td bgcolor='#d5d5d5'><b><i>$publikasi1</i></b></td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Detail</td>
				<td bgcolor='#e5e5e5'>&nbsp;<a href='index.php?v=update&id=$id1'>Ubah</a>
										&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php?v=delete&id=" .$id1. "' onClick=\"return confirm('Anda yakin akan menghapus data ini ?')\">Hapus</a> 
				
				</td>
										
			</tr>
			</table><br>";
			}
	}else{
if($_SESSION[level]=='2'){
		$sql="SELECT * FROM jurnal WHERE $kategori like '%$key%' AND author='author' ORDER BY idJurnal DESC";
		$query=mysql_query($sql,$konek);
while ($data=mysql_fetch_assoc($query)){
		$id=$data['idJurnal'];
		$nama=$data['nama'];
		$judul=$data['judul'];
		$abstrak=$data['abstrak'];
		$key=$data['keyword'];
		$kategori=$data['kategori'];

			$AK='Akuntansi';
			$EI='Ekonomi Islam';
			$MAN='Manajemen';
			$lain='Lainnya';
			if($kategori=='AK'){
				$kategori=$AK;
				} elseif($kategori=='EI'){
					$kategori=$EI;
					} elseif($kategori=='MAN'){
						$kategori=$MAN;
						}else{
							$lain;
						}
		
		$auth=$data['author'];
		$mainname=$data['mainname'];
		$supname=$data['supname'];
		$publikasi=$data['publikasi'];
		
			$yes='Dipublikasi';
			$no='Menunggu Persetujuan Web Master';
			if($publikasi=='1'){
				$publikasi=$yes;
				} else {
					$publikasi=$no;
				}
	
	echo"
	<br>
		<table width='550' border='0' cellpadding='10'>
			<tr>
				<td width='30%' bgcolor='#ff9801'>No</td>
				<td width='70%' bgcolor='#d5d5d5'>$id</td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Nama Peneliti</td>
				<td bgcolor='#e5e5e5'>$nama</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Judul</td>
				<td bgcolor='#d5d5d5'>$judul</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801' >Abstrak</td>
				<td bgcolor='#e5e5e5'>$abstrak</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Keyword</td>
				<td bgcolor='#d5d5d5'>$key</td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Kategori</td>
				<td bgcolor='#e5e5e5'>$kategori</td>
			</tr>
			<tr>
				<td valign='top' bgcolor='#ff9801'>Author</td>
				<td bgcolor='#e5e5e5'>$auth</td>
			</tr>
				<td bgcolor='#ff9801'>File Utama</td>
				<td bgcolor='#d5d5d5'><a href='../upload/$mainname' target='$mainname'><font color=blue>$mainname</a></td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>File Pendukung</td>
				<td bgcolor='#e5e5e5'><a href='../upload/$supname' target='$supname'><font color=blue>$supname</a></td>
			</tr>
			<tr>
				<td bgcolor='#ff9801'>Publikasi</td>
				<td bgcolor='#d5d5d5'><b><i>$publikasi</i></b></td>
			</tr>
			</table><br>";
			}
}else{
if($_SESSION[level]=='1'){
	$sql2="SELECT * FROM jurnal WHERE $kategori like '%$key%' AND publikasi='1' ORDER BY idJurnal DESC";
	$rs_result2 = mysql_query ($sql2, $konek); 

	while ($data2=mysql_fetch_assoc($rs_result2)){
?>	
	<br>
		<table width="550" border="0" cellpadding="10">
			<tr>
				<td ><h1><center><b><?php echo $data2["judul"] ;?></b></center></h1></td>
			</tr>
			<tr>
				<td >by :&nbsp; <?php echo $data2["nama"];?></td>
			</tr>
			<tr>
				<td ><hr><h3><b>Abstrak</b></h3>
					<br>
					<p align="justify">
					<?php
					echo substr($data2["abstrak"], 0, 1000);
					?>
					</td>
			</tr>
			<tr>
				<td ><a href="?v=list&id=<?php echo $data2["idJurnal"]; ?>">Baca Selengkapnya>></a></td>
			</tr>
		</table><br>
	<?php	} 
	}
	}
	}
	}
		?>