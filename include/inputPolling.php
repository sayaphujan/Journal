<form method="post" action="include/simpanPolling.php">
<br>
	<table align='center'>
		<tr>
			<td  bgcolor="#00CCFF" colspan="2"><h1><center><b>Input Data Polling</b></center></h1></td>
		</tr>
<?php
$sql1="SELECT * FROM topik WHERE idTopik='1'";
$query1=mysql_query($sql1);
while($data1=mysql_fetch_array($query1)){
?>
		<tr>
			<td colspan='2'><input type='hidden' name='id1' value='<?php echo ($data1['idTopik']);?>'></td>
		</tr>
		<tr>
			<td> Topik 1</td>
			<td><input type='text' name='topik1' size='30' value='<?php echo ($data1['topik']);?>'></td>
		</tr>
<?php
} 
$sql2="SELECT * FROM polling WHERE id='1'";
$query2=mysql_query($sql2);
while($data2=mysql_fetch_array($query2)){
?>
		<tr>
			<td>Pilihan 1</td>
			<td><input type='text' name='1' size='30' value='<?php echo ($data2['kategori']);?>'></td>
		</tr>
		<?php } 
$sql3="SELECT * FROM polling WHERE id='2'";
$query3=mysql_query($sql3);
while($data3=mysql_fetch_array($query3)){
?>
		<tr>
			<td>Pilihan 2</td>
			<td><input type='text' name='2' size='30' value='<?php echo ($data3['kategori']);?>'></td>
		</tr>
		<?php } 
$sql4="SELECT * FROM polling WHERE id='3'";
$query4=mysql_query($sql4);
while($data4=mysql_fetch_array($query4)){
?>
		<tr>
			<td>Pilihan 3</td>
			<td><input type='text' name='3' size='30' value='<?php echo ($data4['kategori']);?>'></td>
		</tr>
		<?php } 
$sql5="SELECT * FROM polling WHERE id='4'";
$query5=mysql_query($sql5);
while($data5=mysql_fetch_array($query5)){
?>
		<tr>
			<td>Pilihan 4</td>
			<td><input type='text' name='4' size='30' value='<?php echo ($data5['kategori']);?>'></td>
		</tr>
		<?php } 
$sql6="SELECT * FROM polling WHERE id='5'";
$query6=mysql_query($sql6);
while($data6=mysql_fetch_array($query6)){
?>
		<tr>
			<td>Pilihan 5</td>
			<td><input type='text' name='5' size='30' value='<?php echo ($data6['kategori']);?>'></td>
		</tr>
		<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>
<?php
$sql7="SELECT * FROM topik WHERE idTopik='2'";
$query7=mysql_query($sql7);
while($data7=mysql_fetch_array($query7)){
?>
		<tr>
			<td colspan='2'><input type='hidden' name='id2' value='<?php echo ($data7['idTopik']);?>'></td>
		</tr>
		<tr>
			<td> Topik 2</td>
			<td><input type='text' name='topik2' size='30' value='<?php echo ($data7['topik']);?>'></td>
		</tr>
		<?php } 
$sql8="SELECT * FROM polling WHERE id='6'";
$query8=mysql_query($sql8);
while($data8=mysql_fetch_array($query8)){
?>
		<tr>
			<td>Pilihan 1</td>
			<td><input type='text' name='6' size='30' value='<?php echo ($data8['kategori']);?>'></td>
		</tr>
		<?php } 
$sql9="SELECT * FROM polling WHERE id='7'";
$query9=mysql_query($sql9);
while($data9=mysql_fetch_array($query9)){
?>
		<tr>
			<td>Pilihan 2</td>
			<td><input type='text' name='7' size='30' value='<?php echo ($data9['kategori']);?>'></td>
		</tr>
		<?php } 
$sql10="SELECT * FROM polling WHERE id='8'";
$query10=mysql_query($sql10);
while($data10=mysql_fetch_array($query10)){
?>
		<tr>
			<td>Pilihan 3</td>
			<td><input type='text' name='8' size='30' value='<?php echo ($data10['kategori']);?>'></td>
		</tr>
		<?php } 
$sql11="SELECT * FROM polling WHERE id='9'";
$query11=mysql_query($sql11);
while($data11=mysql_fetch_array($query11)){
?>
		<tr>
			<td>Pilihan 4</td>
			<td><input type='text' name='9' size='30' value='<?php echo ($data11['kategori']);?>'></td>
		</tr>
		<?php } 
$sql12="SELECT * FROM polling WHERE id='10'";
$query12=mysql_query($sql12);
while($data12=mysql_fetch_array($query12)){
?>
		<tr>
			<td>Pilihan 5</td>
			<td><input type='text' name='10' size='30' value='<?php echo ($data12['kategori']);?>'></td>
		</tr>
		<?php } 
?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>
<?php
$sql13="SELECT * FROM topik WHERE idTopik='3'";
$query13=mysql_query($sql13);
while($data13=mysql_fetch_array($query13)){
?>
		<tr>
			<td colspan='2'><input type='hidden' name='id3' value='<?php echo ($data13['idTopik']);?>'></td>
		</tr>
		<tr>
			<td> Topik 3</td>
			<td><input type='text' name='topik3' size='30' value='<?php echo ($data13['topik']);?>'></td>
		</tr>
		<?php } 
$sql14="SELECT * FROM polling WHERE id='11'";
$query14=mysql_query($sql14);
while($data14=mysql_fetch_array($query14)){
?>
		<tr>
			<td>Pilihan 1</td>
			<td><input type='text' name='11' size='30' value='<?php echo ($data14['kategori']);?>'></td>
		</tr>
		<?php } 
$sql15="SELECT * FROM polling WHERE id='12'";
$query15=mysql_query($sql15);
while($data15=mysql_fetch_array($query15)){
?>
		<tr>
			<td>Pilihan 2</td>
			<td><input type='text' name='12' size='30' value='<?php echo ($data15['kategori']);?>'></td>
		</tr>
		<?php } 
$sql16="SELECT * FROM polling WHERE id='13'";
$query16=mysql_query($sql16);
while($data16=mysql_fetch_array($query16)){
?>
		<tr>
			<td>Pilihan 3</td>
			<td><input type='text' name='13' size='30' value='<?php echo ($data16['kategori']);?>'></td>
		</tr>
		<?php } 
$sql17="SELECT * FROM polling WHERE id='14'";
$query17=mysql_query($sql17);
while($data17=mysql_fetch_array($query17)){
?>
		<tr>
			<td>Pilihan 4</td>
			<td><input type='text' name='14' size='30' value='<?php echo ($data17['kategori']);?>'></td>
		</tr>
		<?php } 
$sql18="SELECT * FROM polling WHERE id='15'";
$query18=mysql_query($sql18);
while($data18=mysql_fetch_array($query18)){
?>
		<tr>
			<td>Pilihan 5</td>
			<td><input type='text' name='15' size='30' value='<?php echo ($data18['kategori']);?>'></td>
		</tr>
		<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>
<?php
$sql19="SELECT * FROM topik WHERE idTopik='4'";
$query19=mysql_query($sql19);
while($data19=mysql_fetch_array($query19)){
?>
		<tr>
			<td colspan='2'><input type='hidden' name='id4' value='<?php echo ($data19['idTopik']);?>'></td>
		</tr>
		<tr>
			<td> Topik 4</td>
			<td><input type='text' name='topik4' size='30' value='<?php echo ($data19['topik']);?>'></td>
		</tr>
		<?php } 
$sql20="SELECT * FROM polling WHERE id='16'";
$query20=mysql_query($sql20);
while($data20=mysql_fetch_array($query20)){
?>
		<tr>
			<td>Pilihan 1</td>
			<td><input type='text' name='16' size='30' value='<?php echo ($data20['kategori']);?>'></td>
		</tr>
		<?php } 
$sql21="SELECT * FROM polling WHERE id='17'";
$query21=mysql_query($sql21);
while($data21=mysql_fetch_array($query21)){
?>
		<tr>
			<td>Pilihan 2</td>
			<td><input type='text' name='17' size='30' value='<?php echo ($data21['kategori']);?>'></td>
		</tr>
		<?php } 
$sql22="SELECT * FROM polling WHERE id='18'";
$query22=mysql_query($sql22);
while($data22=mysql_fetch_array($query22)){
?>
		<tr>
			<td>Pilihan 3</td>
			<td><input type='text' name='18' size='30' value='<?php echo ($data22['kategori']);?>'></td>
		</tr>
		<?php } 
$sql23="SELECT * FROM polling WHERE id='19'";
$query23=mysql_query($sql23);
while($data23=mysql_fetch_array($query23)){
?>
		<tr>
			<td>Pilihan 4</td>
			<td><input type='text' name='19' size='30' value='<?php echo ($data23['kategori']);?>'></td>
		</tr>
		<?php } 
$sql24="SELECT * FROM polling WHERE id='20'";
$query24=mysql_query($sql24);
while($data24=mysql_fetch_array($query24)){
?>
		<tr>
			<td>Pilihan 5</td>
			<td><input type='text' name='20' size='30' value='<?php echo ($data24['kategori']);?>'></td>
		</tr>
		<?php } ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>
<?php
/*$sql25="SELECT * FROM topik WHERE idTopik='5'";
$query25=mysql_query($sql25);
while($data25=mysql_fetch_array($query25)){*/
?>
<!--
		<tr>
			<td colspan='2'><input type='hidden' name='id5' value='<?php //echo ($data25['idTopik']);?>'></td>
		</tr>
		<tr>
			<td> Topik 5</td>
			<td><input type='text' name='topik5' size='30' value='<?php //echo ($data25['topik']);?>'></td>
		</tr>-->
		<?php/* } 
$sql26="SELECT * FROM polling WHERE id='21'";
$query26=mysql_query($sql26);
while($data26=mysql_fetch_array($query26)){*/
?>
<!--		<tr>
			<td>Pilihan 1</td>
			<td><input type='text' name='21' size='30' value='<?php //echo ($data26['kategori']);?>'></td>
		</tr>-->
		<?php/* } 
$sql27="SELECT * FROM polling WHERE id='22'";
$query27=mysql_query($sql27);
while($data27=mysql_fetch_array($query27)){*/
?>
<!--		<tr>
			<td>Pilihan 2</td>
			<td><input type='text' name='22' size='30' value='<?php //echo ($data27['kategori']);?>'></td>
		</tr>-->
		<?php /*} 
$sql28="SELECT * FROM polling WHERE id='23'";
$query28=mysql_query($sql28);
while($data28=mysql_fetch_array($query28)){*/
?>
<!--		<tr>
			<td>Pilihan 3</td>
			<td><input type='text' name='23' size='30' value='<?php //echo ($data28['kategori']);?>'></td>
		</tr>-->
		<?php/* } 
$sql29="SELECT * FROM polling WHERE id='24'";
$query29=mysql_query($sql29);
while($data29=mysql_fetch_array($query29)){*/
?>
<!--		<tr>
			<td>Pilihan 4</td>
			<td><input type='text' name='24' size='30' value='<?php //echo ($data29['kategori']);?>'></td>
		</tr>-->
<!--
		<?php/* } 
$sql30="SELECT * FROM polling WHERE id='25'";
$query30=mysql_query($sql30);
while($data30=mysql_fetch_array($query30)){*/
?>
		<tr>
			<td>Pilihan 5</td>
			<td><input type='text' name='25' size='30' value='<?php// echo ($data30['kategori']);?>'></td>
		</tr>
		<?php //} ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>-->
		<tr>
			<td align='center' colspan='2'><input type="submit" name="button" id="button" value="SIMPAN" />
				<a href ='main.php'><input TYPE='button' VALUE='BATAL'></a></td>
		</tr>
	</table>
</form>