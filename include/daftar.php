<head>
	<link rel="stylesheet" href="jquery-ui-1.10.3/themes/base/jquery.ui.all.css">
	<script src="jquery-ui-1.10.3/jquery-1.9.1.js"></script>
	<script src="jquery-ui-1.10.3/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui-1.10.3/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui-1.10.3/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="jquery-ui-1.10.3/demos.css">
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:+987',
			showOn: "button",
			buttonImage: "pict/icon_cal.png",
			buttonImageOnly: true
		});
				$( "#datepicker" ).change(function() {
			$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
		});
	});
	</script>
</head>
	<form enctype="multipart/form-data" action="include/proses_daftar.php" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<table width="500" border="0" align="center" cellpadding="5">
			<tr >
				<td  bgcolor="#00CCFF" colspan="2"><h1><center><b>Buat Akun Baru</b></center></h1></td>
			</tr>
			<tr>
				<td></td>
				<td width="100">
					<input name="id" type="hidden" size="30" maxlength="25">
				</td>
			</tr>
			<tr>
				<td width="100">User ID </td>
				<td width="312">
					<input name="user" type="text" size="30" maxlength="10">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input name="pass" type="password" size="30" maxlength="10"></td >
			</tr>
			<tr>
				<td>Nama Anda </td>
				<td>
					<input name="nama" type="text" size="30" maxlength="30">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input name="TglLhr" type="text" id="datepicker" size="25"></td>
			</tr>
			<tr>
				<td valign="top">Alamat </td>
				<td>
					&nbsp;&nbsp;<textarea name="alamat" cols="37" rows="10"></textarea><br />
				</td>
			</tr>
			<tr>
				<td>Email </td>
				<td>
					<input name="email" type="text" size="30" maxlength="20">
				</td>
			</tr>
			<tr>
				<td>Status </td>
				<td>&nbsp;
					<select name="status" id="status">
					<option value="">-Pilih Disini-</option>
					<option value="mhsSTIEM">Mahasiswa STIEM Pekalongan</option>
					<option value="dosenSTIEM">Dosen STIEM Pekalongan</option>
					<option value="mhsLuar">Mahasiswa Luar STIEM Pekalongan</option>
					<option value="dosenLuar">Dosen Luar</option>
					<option value="lainnya">Lainnya</option>
				  </select>
				</td>
			</tr>
<?php
if($_SESSION[level]=='4'){
echo"
			<tr>
				<td>Level </td>
				<td>&nbsp;
					<select name='level' id='level'>
					<option value=''>-Pilih Disini-</option>
					<option value='1'>User</option>
					<option value='2'>Author</option>
					<option value='3'>Editor</option>
					<option value='4'>Admin</option>
				  </select>
				</td>
			</tr>
			<tr>
				<td>Aktivasi</td>
				<td>
					<input type='radio' name='act' value='0'>Tidak Aktif
					&nbsp;
					<input type='radio' name='act' value='1'>Aktif
				</td>
			</tr>
";
}?>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="KIRIM">
					<input TYPE='button' VALUE='BATAL' onClick='history.go(-1);'>
				</td>
			</tr>
		</table>
	</form>