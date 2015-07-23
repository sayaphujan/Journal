<head>
<link rel="stylesheet" type="text/css" href="jquery-ui-1.9.1.custom.min.css">
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.1.custom.min.js"></script>
<script type="text/javascript" charset="utf-8">
		
            $(function () {
				//Box Konfirmasi Hapus
                $('#konfirm-box').dialog({
                    modal: true,
                    autoOpen: false,
                    show: "bounce",
                    hide: "explode",
                    title: "Konfirmasi",
                    buttons: {
					
                        "Ya": function () {
						jQuery.ajax({
						type: "POST",
						url: "deleteJurnal.php",
						data: 'id=' +id,
						success: function(){
						$('#'+id).animate({ backgroundColor: "#fbc7c7" }, "fast")
						.animate({ opacity: "hide" }, "slow");
						}
						});
                        $(this).dialog("close");
                        },

                        "Batal": function () {
						//jika memilih tombol batal
                        $(this).dialog("close");
						
                        }
                    }
                });
				
				//Tombol hapus diklik
                $('.hapus').click(function () {
                    $('#konfirm-box').dialog("open");
					//ambil nomor id
                    id = $(this).attr('id');
                });
            });
		</script>
</head>

<?php
	include"../koneksi.php";
	session_start();
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * 5; 
	if($_SESSION[level]=='2'){
	$sql = "SELECT * FROM jurnal WHERE author='$_SESSION[user]' ORDER BY idJurnal DESC LIMIT $start_from, 5"; 
	$rs_result = mysql_query ($sql, $konek); 
	
	//$data=mysql_fetch_array($hasil);
	while ($data=mysql_fetch_assoc($rs_result)){
	//for($i=0;$i<count($data);$i++){	
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
	$sql1 = "SELECT * FROM jurnal ORDER BY idJurnal DESC LIMIT $start_from, 5"; 
	$rs_result1 = mysql_query ($sql1, $konek); 
	
	//$data=mysql_fetch_array($hasil);
	while ($data1=mysql_fetch_assoc($rs_result1)){
	//for($i=0;$i<count($data);$i++){	
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
			$jan='Januari'; $feb='Februari'; $mar='Maret'; $apr='April'; $mei='Mei'; $jun='Juni';
			$jul='Juli'; $aug='Agustus'; $sep='September'; $okt='Oktober'; $nov='November'; $des='Desember';
			if($bulan1=='jan'){
				$bulan1=$jan;
				}elseif($bulan1=='feb'){
					$bulan1=$feb;
					}elseif($bulan1=='mar'){
						$bulan1=$mar;
						}elseif($bulan1=='apr'){
							$bulan1=$apr;
							}elseif($bulan1=='mei'){
								$bulan1=$mei;
								}elseif($bulan1=='jun'){
									$bulan1=$jun;
									}elseif($bulan1=='jul'){
										$bulan1=$jul;
										}elseif($bulan1=='aug'){
											$bulan1=$aug;
											}elseif($bulan1=='sept'){
												$bulan1=$sept;
													}elseif($bulan1=='okt'){
														$bulan1=$okt;
															}elseif($bulan1=='nov'){
																$bulan1=$nov;
																}elseif($bulan1=='des'){
																	$bulan1=$des;
																	}
																	
		$tahun1= substr($data1['issue'],4,4);
		$issue1=("$bulan1 $tahun");
			
					
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
				<td bgcolor='#e5e5e5'>&nbsp;<a href='main.php?v=update&id=$id1'>Ubah</a>
										&nbsp;&nbsp;&nbsp;&nbsp;<a href='main.php?v=delete&id=" .$id1. "' onClick=\"return confirm('Anda yakin akan menghapus data ini ?')\">Hapus</a> 
				
				</td>										
			</tr>
			</table><br>";
		}		
		}
$sql = "SELECT COUNT(idJurnal) FROM jurnal"; 
$rs_result = mysql_query($sql,$konek); 
$data = mysql_fetch_row($rs_result); 
$total_records = $data[0]; 
$total_pages = ceil($total_records / 5); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='?v=listMain&page=".$i."'>".$i."</a>";
} 
?>