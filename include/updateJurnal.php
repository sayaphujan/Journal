<?php
include"../koneksi.php";
$id=$_REQUEST['id'];
$detail="SELECT * FROM jurnal WHERE idJurnal='$id'"; 
$hasil=mysql_query($detail);

while($data=mysql_fetch_array($hasil)){
		$id=$data['idJurnal'];
		$nama=$data['nama'];
		$judul=$data['judul'];
		$abstrak=$data['abstrak'];
		$key=$data['keyword'];
		$kategori=$data['kategori'];
		//$issue=$data['issue'];
		$auth=$data['author'];
		$mainname=$data['mainname'];
		$supname=$data['supname'];
		$publikasi=$data['publikasi'];
		
echo"
<form enctype=\"multipart/form-data\" action=\"include/fixJurnal.php\" method=\"post\" target=\"_self\">
	<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2000000\">
	<br>
		<table width=\"500\" border=\"0\" align=\"center\" cellpadding=\"5\">
			<tr >
				<td  bgcolor=\"#00CCFF\" colspan=\"2\"><h1><center><b>Update Data Jurnal</b></center></h1></td>
			</tr>
			<tr>
				<td width='30%'>No </td>
				<td width='70%'>
					<input name=\"idJurnal\" type=\"hidden\" size=\"30\" value=\"$id\">&nbsp;&nbsp;&nbsp;$id
				</td>
			</tr>
			<tr>
				<td >Nama Peneliti</td>
				<td >
					<input name=\"nama\" type=\"text\" size=\"30\" value=\"$nama\">
				</td>
			</tr>
			<tr>
				<td>Judul Penelitian</td>
				<td>
					<input name=\"judul\" type=\"text\" size=\"46\" value=\"$judul\"></td >
			</tr>
			<tr>
				<td valign=\"top\">Abstrak</td>
				<td>
				&nbsp;	<textarea name=\"abstrak\" cols=\"35\" rows=\"10\">$abstrak</textarea>
				</td>
			</tr>
			<tr>
				<td>Keywords</td>
				<td>
					<input name=\"key\" type=\"text\" size=\"46\" value=\"$key\"></td >
			</tr>
			<tr>
				<td>Kategori</td>
				<td>&nbsp;&nbsp;
					<select name=\"isi_kategori\">";
					if($kategori=='')
					echo"<option value='' selected>- Pilih Disini -</option>";
						else echo"<option value=''>- Pilih Disini -</option>";
						
					if($kategori=='AK')
					echo"<option value='AK' selected>Akuntansi</option>";
						else echo"<option value='AK'>Akuntansi</option>";
						
					if($kategori=='EI')
					echo"<option value='EI' selected>Ekonomi Islam</option>";
						else echo"<option value='EI'>Ekonomi Islam</option>";
					
					if($kategori=='MAN')
					echo"<option value='MAN' selected>Manajemen</option>";
						else echo"<option value='MAN'>Manajemen</option>";
						
					if($kategori=='lainnya')
					echo"<option value='lainnya' selected>Lainnya</option>";
						else echo"<option value='lainnya'>Lainnya</option>";
echo"				  </select>
				</td>
			</tr>
			<tr>
			<td>Issue</td>
				<td>
					&nbsp;&nbsp;&nbsp;<select name=\"bulan\">
					<option selected value=\"-\">Bulan</option>";
$bulan= substr($data['issue'],0,3);
			if($bulan=='jan')
			echo"<option value=\"jan\" selected>Januari</option>";
				else echo"<option value=\"jan\">Januari</option>";
				
			if($bulan=='feb')
			echo"<option value=\"feb\" selected>Februari</option>";
				else echo"<option value=\"feb\">Februari</option>";
				
			if($bulan=='mar')
			echo"<option value=\"mar\" selected>Maret</option>";
				else echo"<option value=\"mar\">Maret</option>";
				
			if($bulan=='apr')
			echo"<option value=\"apr\" selected>April</option>";
				else echo"<option value=\"apr\">April</option>";
				
			if($bulan=='mei')
			echo"<option value=\"mei\" selected>Mei</option>";
				else echo"<option value=\"mei\">Mei</option>";
				
			if($bulan=='jun')
			echo"<option value=\"jun\" selected>Juni</option>";
				else echo"<option value=\"jun\">Juni</option>";
			
			if($bulan=='jul')
			echo"<option value=\"jul\" selected>Juli</option>";
				else echo"<option value=\"jul\">Juli</option>";
				
			if($bulan=='aug')
			echo"<option value=\"aug\" selected>Agustus</option>";
				else echo"<option value=\"aug\">Agustus</option>";
							
			if($bulan=='sept')
			echo" <option value=\"sep\" selected>September</option>";
				else echo" <option value=\"sep\">September</option>";
							
			if($bulan=='okt')
			echo"<option value=\"okt\" selected>Oktober</option>";
				else echo"<option value=\"okt\">Oktober</option>";
							
			if($bulan=='nov')
			echo"<option value=\"nov\" selected>November</option>";
				else echo"<option value=\"nov\">Nopember</option>";
							
			if($bulan=='des')
			echo"<option value=\"des\" selected>Desember</option>";
				else echo"<option value=\"des\">Desember</option>";
echo" 
                        </select>
						&nbsp;<select name=\"tahun\">
							<option value=\"-\">Tahun</option>";
			$tahun=substr($data['issue'],4,4);
							for ($i=1900;$i<=3000;$i++){
							if($tahun==$i)
								echo"<option value=$i selected>$i</option>";
									else echo"<option value=$i>$i</option>";
							}
echo"					</select>
				</td>
			</tr>
			<tr>
				<td>Author</td>
				<td><input name=\"author\" type=\"hidden\" size=\"30\" value=\"$auth\">&nbsp;&nbsp;&nbsp;$auth</td>
			</tr>
			<tr>
				<td>File Utama</td>
				<td><input name=\"mainfile\" type=\"file\" id=\"mainfile\" size=\"33\">"./*&nbsp;&nbsp;<a href='../upload/$mainname' target='$mainname'><font color=blue>$mainname</a>.*/"</td>
			</tr>
			<tr>
				<td>File Pendukung<br>(Quesioner, dll )</td>
				<td><input name=\"supfile\" type=\"file\" id=\"mainfile\" size=\"33\">&nbsp;&nbsp;<a href='../upload/$supname' target='$supname'><font color=blue>$supname</a></td>
			</tr>
			<tr>
				<td>Publikasi</td>
				<td>";
				if($publikasi=='1'){
				echo"
					<input type=\"radio\" name=\"public\" value='0' > Belum di Publikasi
					&nbsp;
					<input type=\"radio\" name=\"public\" value='1' checked>Terpublikasi";
				}else{
				echo"
					<input type=\"radio\" name=\"public\" value='0' checked> Belum di Publikasi
					&nbsp;
					<input type=\"radio\" name=\"public\" value='1' >Terpublikasi";
					}
echo"				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type=\"submit\" name=\"update\" value=\"SIMPAN\" id=\"simpan\">
					<a href='main.php?v=listMain'><input TYPE='button' VALUE='BATAL'></a>
				</td>
			</tr>
		</table>
	</form>";
}
?>