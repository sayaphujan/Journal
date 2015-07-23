<table width="550" border="0" cellspacing="0" cellpadding="3" align='center'>
  <?php
	include"koneksi.php";
	$idJurnal=$_GET['id'];
	$sql50="SELECT * FROM jurnal WHERE idJurnal='$idJurnal'";
	$query50=mysql_query($sql50);
	while($data50=mysql_fetch_array($query50)){
  ?>
  <tr>
		<td  bgcolor="#00CCFF" colspan="2"><h1><center><b>Hasil Polling Jurnal Penelitian <br><br><?php echo ($data50['judul']);?></b></center></h1></td>
  </tr>
 		<?php
		}
			$sql="SELECT * FROM topik WHERE idTopik='1'";
			$query=mysql_query($sql);
			while($data=mysql_fetch_array($query)){
		?>
  <tr>
		<td colspan='2'><b> <?php echo ($data['idTopik']);?>&nbsp;&nbsp;&nbsp;<?php echo ($data['topik']);?></b></td>
  </tr>
  <?php } ?>
<!-- Topik1 pilihan1-->
  <tr>
		<?php 
			$sql2 = "select * from polling WHERE id='1' AND idTopik='1'";
			$kueri2 = mysql_query($sql2);
			while($data2 = mysql_fetch_array($kueri2)){
		?>
		<td><?php echo ($data2['kategori']); ?></td>
		<?php } 
			$sql3 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='1' AND idTopik='1' AND idJurnal='$idJurnal'";
			$kueri3 = mysql_query($sql3);
			while($data3 = mysql_fetch_array($kueri3)){
			$width = $data3['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data3['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 1 Pilihan2-->
  <tr>
		<?php 
			$sql4 = "select * from polling WHERE id='2' AND idTopik='1'";
			$kueri4 = mysql_query($sql4);
			while($data4 = mysql_fetch_array($kueri4)){
		?>
		<td><?php echo ($data4['kategori']); ?></td>
		<?php } 
			$sql5 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='2' AND idTopik='1' AND idJurnal='$idJurnal'";
			$kueri5 = mysql_query($sql5);
			while($data5 = mysql_fetch_array($kueri5)){
			$width = $data5['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data5['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 1 pilihan3-->
  <tr>
		<?php 
			$sql6 = "select * from polling WHERE id='3' AND idTopik='1'";
			$kueri6 = mysql_query($sql6);
			while($data6 = mysql_fetch_array($kueri6)){
		?>
		<td><?php echo ($data6['kategori']); ?></td>
		<?php } 
			$sql7 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='3' AND idTopik='1' AND idJurnal='$idJurnal'";
			$kueri7 = mysql_query($sql7);
			while($data7 = mysql_fetch_array($kueri7)){
			$width = $data7['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data7['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 1 pilihan4-->
  <tr>
		<?php 
			$sql8 = "select * from polling WHERE id='4' AND idTopik='1'";
			$kueri8 = mysql_query($sql8);
			while($data8 = mysql_fetch_array($kueri8)){
		?>
		<td><?php echo ($data8['kategori']); ?></td>
		<?php } 
			$sql9 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='4' AND idTopik='1' AND idJurnal='$idJurnal'";
			$kueri9 = mysql_query($sql9);
			while($data9 = mysql_fetch_array($kueri9)){
			$width = $data9['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data9['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 1 pilihan5-->
  <tr>
		<?php 
			$sql10 = "select * from polling WHERE id='5' AND idTopik='1'";
			$kueri10 = mysql_query($sql10);
			while($data10 = mysql_fetch_array($kueri10)){
		?>
		<td><?php echo ($data10['kategori']); ?></td>
		<?php } 
			$sql11 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='5' AND idTopik='1' AND idJurnal='$idJurnal'";
			$kueri11 = mysql_query($sql11);
			while($data11 = mysql_fetch_array($kueri11)){
			$width = $data11['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data11['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<!--TOPIK 2-->
<table width="550" border="0" cellspacing="0" cellpadding="3" align='center'>
  <?php
			$sql12="SELECT * FROM topik WHERE idTopik='2'";
			$query12=mysql_query($sql12);
			while($data12=mysql_fetch_array($query12)){
		?>
  <tr>
		<td colspan='2'><b> <?php echo ($data12['idTopik']);?>&nbsp;&nbsp;&nbsp;<?php echo ($data12['topik']);?></b></td>
  </tr>
  <?php } ?>
<!--Topik 2 pilihan1-->
  <tr>
		<?php 
			$sql13 = "select * from polling WHERE id='6' AND idTopik='2'";
			$kueri13 = mysql_query($sql13);
			while($data13 = mysql_fetch_array($kueri13)){
		?>
		<td><?php echo ($data13['kategori']); ?></td>
		<?php } 
			$sql14 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='6' AND idTopik='2' AND idJurnal='$idJurnal'";
			$kueri14 = mysql_query($sql14);
			while($data14 = mysql_fetch_array($kueri14)){
			$width = $data14['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data14['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 2 Pilihan2-->
  <tr>
		<?php 
			$sql15 = "select * from polling WHERE id='7' AND idTopik='2'";
			$kueri15 = mysql_query($sql15);
			while($data15 = mysql_fetch_array($kueri15)){
		?>
		<td><?php echo ($data15['kategori']); ?></td>
		<?php } 
			$sql16 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='7' AND idTopik='2' AND idJurnal='$idJurnal'";
			$kueri16 = mysql_query($sql16);
			while($data16 = mysql_fetch_array($kueri16)){
			$width = $data16['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data16['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 2 pilihan3-->
  <tr>
		<?php 
			$sql17 = "select * from polling WHERE id='8' AND idTopik='2'";
			$kueri17 = mysql_query($sql17);
			while($data17 = mysql_fetch_array($kueri17)){
		?>
		<td><?php echo ($data17['kategori']); ?></td>
		<?php } 
			$sql18 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='8' AND idTopik='2' AND idJurnal='$idJurnal'";
			$kueri18 = mysql_query($sql18);
			while($data18 = mysql_fetch_array($kueri18)){
			$width = $data18['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data18['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 2 pilihan4-->
  <tr>
		<?php 
			$sql19 = "select * from polling WHERE id='9' AND idTopik='2'";
			$kueri19 = mysql_query($sql19);
			while($data19 = mysql_fetch_array($kueri19)){
		?>
		<td><?php echo ($data19['kategori']); ?></td>
		<?php } 
			$sql20 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='9' AND idTopik='2' AND idJurnal='$idJurnal'";
			$kueri20 = mysql_query($sql20);
			while($data20 = mysql_fetch_array($kueri20)){
			$width = $data20['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data20['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 2 pilihan5-->
  <tr>
		<?php 
			$sql21 = "select * from polling WHERE id='10' AND idTopik='2'";
			$kueri21 = mysql_query($sql21);
			while($data21 = mysql_fetch_array($kueri21)){
		?>
		<td><?php echo ($data21['kategori']); ?></td>
		<?php } 
			$sql22 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='10' AND idTopik='2' AND idJurnal='$idJurnal'";
			$kueri22 = mysql_query($sql22);
			while($data22 = mysql_fetch_array($kueri22)){
			$width = $data22['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data22['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<!-- TOPIK 3-->
<table width="550" border="0" cellspacing="0" cellpadding="3" align='center'>
  <?php
			$sql23="SELECT * FROM topik WHERE idTopik='3'";
			$query23=mysql_query($sql23);
			while($data23=mysql_fetch_array($query23)){
		?>
  <tr>
		<td colspan='2'><b> <?php echo ($data23['idTopik']);?>&nbsp;&nbsp;&nbsp;<?php echo ($data23['topik']);?></b></td>
  </tr>
  <?php } ?>
<!--Topik 3 pilihan1-->
  <tr>
		<?php 
			$sql24 = "select * from polling WHERE id='11' AND idTopik='3'";
			$kueri24 = mysql_query($sql24);
			while($data24 = mysql_fetch_array($kueri24)){
		?>
		<td><?php echo ($data24['kategori']); ?></td>
		<?php } 
			$sql25 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='11' AND idTopik='3' AND idJurnal='$idJurnal'";
			$kueri25 = mysql_query($sql25);
			while($data25 = mysql_fetch_array($kueri25)){
			$width = $data25['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data25['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 3 Pilihan2-->
  <tr>
		<?php 
			$sql26 = "select * from polling WHERE id='12' AND idTopik='3'";
			$kueri26 = mysql_query($sql26);
			while($data26 = mysql_fetch_array($kueri26)){
		?>
		<td><?php echo ($data26['kategori']); ?></td>
		<?php } 
			$sql27 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='12' AND idTopik='3' AND idJurnal='$idJurnal'";
			$kueri27 = mysql_query($sql27);
			while($data27= mysql_fetch_array($kueri27)){
			$width = $data27['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data27['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 3 pilihan3-->
  <tr>
		<?php 
			$sql28 = "select * from polling WHERE id='13' AND idTopik='3'";
			$kueri28 = mysql_query($sql28);
			while($data28 = mysql_fetch_array($kueri28)){
		?>
		<td><?php echo ($data28['kategori']); ?></td>
		<?php } 
			$sql29 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='13' AND idTopik='3' AND idJurnal='$idJurnal'";
			$kueri29 = mysql_query($sql29);
			while($data29 = mysql_fetch_array($kueri29)){
			$width = $data29['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data29['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 3 pilihan4-->
  <tr>
		<?php 
			$sql30 = "select * from polling WHERE id='14' AND idTopik='3'";
			$kueri30 = mysql_query($sql30);
			while($data30 = mysql_fetch_array($kueri30)){
		?>
		<td><?php echo ($data30['kategori']); ?></td>
		<?php } 
			$sql31 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='14' AND idTopik='3' AND idJurnal='$idJurnal'";
			$kueri31 = mysql_query($sql31);
			while($data31 = mysql_fetch_array($kueri31)){
			$width = $data31['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data31['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 3 pilihan5-->
  <tr>
		<?php 
			$sql32 = "select * from polling WHERE id='15' AND idTopik='3'";
			$kueri32 = mysql_query($sql32);
			while($data32 = mysql_fetch_array($kueri32)){
		?>
		<td><?php echo ($data32['kategori']); ?></td>
		<?php } 
			$sql33 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='15' AND idTopik='3' AND idJurnal='$idJurnal'";
			$kueri33 = mysql_query($sql33);
			while($data33 = mysql_fetch_array($kueri33)){
			$width = $data33['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data33['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<!--TOPIK 4-->
<table width="550" border="0" cellspacing="0" cellpadding="3" align='center'>
  <?php
			$sql34="SELECT * FROM topik WHERE idTopik='4'";
			$query34=mysql_query($sql34);
			while($data34=mysql_fetch_array($query34)){
		?>
  <tr>
		<td colspan='2'><b> <?php echo ($data34['idTopik']);?>&nbsp;&nbsp;&nbsp;<?php echo ($data34['topik']);?></b></td>
  </tr>
  <?php } ?>
<!--Topik 4 pilihan1-->
  <tr>
		<?php 
			$sql35 = "select * from polling WHERE id='16' AND idTopik='4'";
			$kueri35 = mysql_query($sql35);
			while($data35 = mysql_fetch_array($kueri35)){
		?>
		<td><?php echo ($data35['kategori']); ?></td>
		<?php } 
			$sql36 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='16' AND idTopik='4' AND idJurnal='$idJurnal'";
			$kueri36 = mysql_query($sql36);
			while($data36 = mysql_fetch_array($kueri36)){
			$width = $data36['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data36['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 4 Pilihan2-->
  <tr>
		<?php 
			$sql37 = "select * from polling WHERE id='17' AND idTopik='4'";
			$kueri37 = mysql_query($sql37);
			while($data37 = mysql_fetch_array($kueri37)){
		?>
		<td><?php echo ($data37['kategori']); ?></td>
		<?php } 
			$sql38 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='17' AND idTopik='4' AND idJurnal='$idJurnal'";
			$kueri38 = mysql_query($sql38);
			while($data38= mysql_fetch_array($kueri38)){
			$width = $data38['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data38['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 4 pilihan3-->
  <tr>
		<?php 
			$sql39 = "select * from polling WHERE id='18' AND idTopik='4'";
			$kueri39 = mysql_query($sql39);
			while($data39 = mysql_fetch_array($kueri39)){
		?>
		<td><?php echo ($data39['kategori']); ?></td>
		<?php } 
			$sql40 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='18' AND idTopik='4' AND idJurnal='$idJurnal'";
			$kueri40 = mysql_query($sql40);
			while($data40 = mysql_fetch_array($kueri40)){
			$width = $data40['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data40['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 4 pilihan4-->
  <tr>
		<?php 
			$sql41 = "select * from polling WHERE id='19' AND idTopik='4'";
			$kueri41 = mysql_query($sql41);
			while($data41 = mysql_fetch_array($kueri41)){
		?>
		<td><?php echo ($data41['kategori']); ?></td>
		<?php } 
			$sql42 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='19' AND idTopik='4' AND idJurnal='$idJurnal'";
			$kueri42 = mysql_query($sql42);
			while($data42 = mysql_fetch_array($kueri42)){
			$width = $data42['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data42['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
<!--Topik 4 pilihan5-->
  <tr>
		<?php 
			$sql43 = "select * from polling WHERE id='20' AND idTopik='4'";
			$kueri43 = mysql_query($sql43);
			while($data43 = mysql_fetch_array($kueri43)){
		?>
		<td><?php echo ($data43['kategori']); ?></td>
		<?php } 
			$sql44 = "select sum(jumlah) as 'jumlah' from hasil WHERE id='20' AND idTopik='4' AND idJurnal='$idJurnal'";
			$kueri44 = mysql_query($sql44);
			while($data44 = mysql_fetch_array($kueri44)){
			$width = $data44['jumlah']*4;
		?>
		<td bgcolor="#E4FAFC">
			<table width="200" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="20"><img src="../pict/tabOrange.jpg" width="<?php echo ($width); ?>" height="20" /></td>
					<td width="180"> <?php echo ($data44['jumlah']); ?> orang</td>
				</tr>
			</table>
		</td>
		<?php } ?>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
		<?php
			$sql45 = "select sum(jumlah)/4 as 'jumlah' from hasil WHERE idJurnal='$idJurnal'";
			$kueri45 = mysql_query($sql45);
			while($data45 = mysql_fetch_array($kueri45)){
			$jum=sprintf("%8.0f", ($data45["jumlah"]));
		?>
		<center>TOTAL RESPONDEN pada Jurnal ini adalah <b><u><?php echo $jum; ?></u></b> RESPONDEN</center><br>
		<?php }
		if($_SESSION[level]!='1' && $_SESSION[level]!='2' && $_SESSION[level]!='3' && $_SESSION[level]!='4'){
		echo"<center>Silakan <b>LOGIN</b> untuk mengisi Polling</center>";
		}else if($_SESSION[level]!=''){
	$idJurnal=$_GET['id'];
	$sql51="SELECT * FROM jurnal WHERE idJurnal='$idJurnal'";
	$query51=mysql_query($sql51);
	while($data51=mysql_fetch_array($query51)){
  ?>
  <br>
  <br>
<a href='?v=list&id=<?php echo ($data51['idJurnal']); ?>'><b>Lihat Jurnal</b></a>
<?php
}
}
?>