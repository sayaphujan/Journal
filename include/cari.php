<form action="main.php?v=find" method="post">
 <div id="box">
		<table width="100" cellpadding="10" align="center">
			<tr>
				<td colspan="2" background="../pict/tabOrange2.jpg">&nbsp;<b>CARI</b></td>
			</tr>
			<tr>
				<td>
					<select name="kategori" id="kategori">
					<option value="#">- Pilih Disini -</option>
					<option value="judul">Judul Penelitian</option>
					<option value="nama">Nama Peneliti</option>
					<option value="issue">Issue</option>
					<option value="kategori">Kategori</option>
				  </select>
				</td>
			<tr>
				<td align="center" colspan="2">
					<input name="key" type="text" size="30">
				</td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="cari" value="CARI">
			</tr>
		</table>
	</div>
	</form>