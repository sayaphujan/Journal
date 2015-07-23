<form method="post" action="include/fungsi_polling.php">
<br>
	<table border='0' width='550' align='center'>
		<tr>
			<td  bgcolor="#00CCFF" colspan="2"><h1><center><b>Polling</b></center></h1></td>
		</tr>
				<?php
			include"koneksi.php";
			$idJurnal=$_GET['id'];
			$sql="SELECT * FROM topik WHERE idTopik='1'";
			$query=mysql_query($sql);
			while($data=mysql_fetch_array($query)){
		?>
		<tr>
			<td width='10%'><input type='hidden' name='id1' value='<?php echo ($data['idTopik']);?>'>&nbsp;&nbsp;<b><?php echo ($data['idTopik']);?></b></td>
			<td width='90%'><b><?php echo ($data['topik']);?></b></td>
		</tr>
		<?php } 
$sql2="SELECT * FROM polling WHERE idTopik='1'";
$query2=mysql_query($sql2);
while($data2=mysql_fetch_array($query2)){
?>
		<tr>
			<td><input type='radio' name='1' value='<?php echo ($data2['id']);?>'></td>
			<td><?php echo ($data2['kategori']);?></td>

		</tr>
<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<?php
			$sql3="SELECT * FROM topik WHERE idTopik='2'";
			$query3=mysql_query($sql3);
			while($data3=mysql_fetch_array($query3)){
		?>
		<tr>
			<td width='10%'><input type='hidden' name='id2' value='<?php echo ($data3['idTopik']);?>'>&nbsp;&nbsp;<b><?php echo ($data3['idTopik']);?></b></td>
			<td width='90%'><b><?php echo ($data3['topik']);?></b></td>
		</tr>
		<?php } 
$sql4="SELECT * FROM polling WHERE idTopik='2'";
$query4=mysql_query($sql4);
while($data4=mysql_fetch_array($query4)){
?>
		<tr>
			<td><input type='radio' name='2' value='<?php echo ($data4['id']);?>'></td>
			<td><?php echo ($data4['kategori']);?></td>
			<input type='hidden' name='idJurnal' value='<?php echo $idJurnal?>'></td>
		</tr>
<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<?php
			$sql5="SELECT * FROM topik WHERE idTopik='3'";
			$query5=mysql_query($sql5);
			while($data5=mysql_fetch_array($query5)){
		?>
		<tr>
			<td width='10%'><input type='hidden' name='id3' value='<?php echo ($data5['idTopik']);?>'>&nbsp;&nbsp;<b><?php echo ($data5['idTopik']);?></b></td>
			<td width='90%'><b><?php echo ($data5['topik']);?></b></td>
		</tr>
		<?php } 
$sql6="SELECT * FROM polling WHERE idTopik='3'";
$query6=mysql_query($sql6);
while($data6=mysql_fetch_array($query6)){
?>
		<tr>
			<td><input type='radio' name='3' value='<?php echo ($data6['id']);?>'></td>
			<td><?php echo ($data6['kategori']);?></td>
			<input type='hidden' name='idJurnal' value='<?php echo $idJurnal?>'></td>
		</tr>
<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<?php
			$sql7="SELECT * FROM topik WHERE idTopik='4'";
			$query7=mysql_query($sql7);
			while($data7=mysql_fetch_array($query7)){
		?>
		<tr>
			<td width='10%'><input type='hidden' name='id4' value='<?php echo ($data7['idTopik']);?>'>&nbsp;&nbsp;<b><?php echo ($data7['idTopik']);?></b></td>
			<td width='90%'><b><?php echo ($data7['topik']);?></b></td>
		</tr>
		<?php } 
$sql8="SELECT * FROM polling WHERE idTopik='4'";
$query8=mysql_query($sql8);
while($data8=mysql_fetch_array($query8)){
?>
		<tr>
			<td><input type='radio' name='4' value='<?php echo ($data8['id']);?>'></td>
			<td><?php echo ($data8['kategori']);?></td>
			<input type='hidden' name='idJurnal' value='<?php echo $idJurnal?>'></td>
		</tr>
<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
				<tr>
			<td align='center' colspan='2'><input type="submit" name="button" id="button" value="SIMPAN" />
				<input TYPE='button' VALUE='BATAL' onClick='history.go(-1);'>
				<!--<a href ='index.php'><input TYPE='button' VALUE='BATAL'></a>--></td>
		</tr>
	</table>
</form>