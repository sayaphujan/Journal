<form enctype="multipart/form-data" action='include/simpanJurnal.php' method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<br>
		<table width="500" border="0" align="center" cellpadding="5">
			<tr >
				<td  bgcolor="#00CCFF" colspan="2"><h1><center><b>Input Data Jurnal</b></center></h1></td>
			</tr>
			<tr>
				<td ></td>
				<td >
					<input name="idJurnal" type="hidden" size="30" maxlength="25">
				</td>
			</tr>
			<tr>
				<td >Nama Peneliti</td>
				<td >
					<input name="nama" type="text" size="30" >
				</td>
			</tr>
			<tr>
				<td>Judul Penelitian</td>
				<td>
					<input name="judul" type="text" size="46" ></td >
			</tr>
			<tr>
				<td valign="top">Abstrak</td>
				<td>
				&nbsp;	<textarea name="abstrak" cols="35" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>Keywords</td>
				<td>
					<input name="key" type="text" size="46" maxlength="100"></td >
			</tr>
			<tr>
				<td>Kategori</td>
				<td>&nbsp;&nbsp;
					<select name="kategori" id="kategori">
					<option value="">- Pilih Disini -</option>
					<option value="AK">Akuntansi</option>
					<option value="EI">Ekonomi Islam</option>
					<option value="MAN">Manajemen</option>
					<option value="lainnya">Lainnya</option>
				  </select>
				</td>
			</tr>
<?php
session_start();
if($_SESSION[level]=='2'){
echo"
			<tr>
				<td>File Utama</td>
				<td>
					<input name='mainfile' type='file' id='userfile' size='33'>
				</td>
			</tr>
			<tr>
				<td>File Pendukung<br>(Quesioner, dll )</td>
				<td>
					<input name='supfile' type='file' id='userfile' size='33'>
				</td>
			</tr>
";		
}else{
echo"
		<tr>
			<td>Issue</td>
				<td>
					&nbsp;&nbsp;&nbsp;<select name='bulan'>
                        <option selected value='-'>Bulan</option>
                        <option value='jan'>Januari</option>
                        <option value='feb'>Februari</option>
                        <option value='mar'>Maret</option>
                        <option value='apr'>April</option>
                        <option value='mei'>Mei</option>
                        <option value='jun'>Juni</option>
                        <option value='jul'>Juli</option>
                        <option value='aug'>Agustus</option>
                        <option value='sep'>September</option>
                        <option value='okt'>Oktober</option>
                        <option value='nov'>November</option>
                        <option value='des'>Desember</option>
                        </select>
						&nbsp;<select name='tahun'>
							<option value='-'>Tahun</option>";
							for ($i=1900;$i<=3000;$i++){
							echo"
								<option value=$i>$i</option>";
							}
echo"
					</select>
				</td>
			<tr>
				<td>File Utama</td>
				<td>
					<input name='mainfile' type='file' id='mainfile' size='33'>
				</td>
			</tr>
			<tr>
				<td>File Pendukung<br>(Quesioner, dll )</td>
				<td>
					<input name='supfile' type='file' id='supfile' size='33'>
				</td>
			</tr>
			<tr>
				<td>Publikasi</td>
				<td>
					<input type='radio' name='public' value='0'>Belum di Publikasi
					&nbsp;
					<input type='radio' name='public' value='1'>Terpublikasi
				</td>
			</tr>";
			}
?>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="upload" value="UPLOAD" id="upload">
					<a href ='main.php'><input TYPE='button' VALUE='BATAL'></a>
				</td>
			</tr>
		</table>
	</form>