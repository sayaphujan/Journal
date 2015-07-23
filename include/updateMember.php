<?php
	include"../koneksi.php";
$user=$_REQUEST['user'];
$detail="SELECT * FROM anggota WHERE user='$user'"; 
$hasil=mysql_query($detail);
while ($data=mysql_fetch_assoc($hasil)){
	//for($i=0;$i<count($data);$i++){	
		$user=$data['user'];
		$pass=$data['pass'];
		$nama=$data['nama'];
		$TglLhr=$data['TglLhr'];
		$alamat=$data['alamat'];
		$email=$data['email'];
		$status=$data['status'];
		$level=$data['level'];
		$aktivasi=$data['aktivasi'];
	
	echo"

<head>
	<link rel=\"stylesheet\" href=\"jquery-ui-1.10.3/themes/base/jquery.ui.all.css\">
	<script src=\"jquery-ui-1.10.3/jquery-1.9.1.js\"></script>
	<script src=\"jquery-ui-1.10.3/ui/jquery.ui.core.js\"></script>
	<script src=\"jquery-ui-1.10.3/ui/jquery.ui.widget.js\"></script>
	<script src=\"jquery-ui-1.10.3/ui/jquery.ui.datepicker.js\"></script>
	<link rel=\"stylesheet\" href=\"jquery-ui-1.10.3/demos.css\">
	<script>
	$(function() {
		$( \"#datepicker\" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:+987',
			showOn: \"button\",
			buttonImage: \"pict/icon_cal.png\",
			buttonImageOnly: true
		});
				$( \"#datepicker\" ).change(function() {
			$( \"#datepicker\" ).datepicker( \"option\", \"dateFormat\", \"yy-mm-dd\" );
		});
	});
	</script>
</head>
	<form enctype=\"multipart/form-data\" action=\"include/fixMember.php\" method=\"post\">
	<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2000000\">
		<table width=\"500\" border=\"0\" align=\"center\" cellpadding=\"5\">
			<tr >
				<td  bgcolor=\"#00CCFF\" colspan=\"2\"><h1><center><b>UPDATE AKUN</b></center></h1></td>
			</tr>
			<tr>
				<td width=\"100\">User ID </td>
				<td width=\"312\">
					<input name=\"user\" type=\"hidden\" size=\"30\" value=\"$user\">&nbsp;&nbsp;&nbsp;$user
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input name=\"pass\" type=\"password\" size=\"30\" value=\"$pass\"></td >
			</tr>
			<tr>
				<td>Nama Anda </td>
				<td>
					<input name=\"nama\" type=\"text\" size=\"30\" value=\"$nama\">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input name=\"TglLhr\" type=\"text\" id=\"datepicker\" size=\"25\" value=\"$TglLhr\"></td>
			</tr>
			<tr>
				<td valign=\"top\">Alamat </td>
				<td>
					&nbsp;&nbsp;<textarea name=\"alamat\" cols=\"37\" rows=\"10\" value=\"$alamat\">$alamat</textarea><br />
				</td>
			</tr>
			<tr>
				<td>Email </td>
				<td>
					<input name=\"email\" type=\"text\" size=\"30\" value=\"$email\">
				</td>
			</tr>
			<tr>
				<td>Status </td>
				<td>&nbsp;
					<select name=\"status\" id=\"status\">
					<option value=\"\">-Pilih Disini-</option>";
					if($status=='mhsSTIEM')
					echo"<option value=\"mhsSTIEM\" selected>Mahasiswa STIEM Pekalongan</option>";
						else echo"<option value=\"mhsSTIEM\">Mahasiswa STIEM Pekalongan</option>";
					
					if($status=='dosenSTIEM')
					echo"<option value=\"dosenSTIEM\" selected>Dosen STIEM Pekalongan</option>";
						else echo"<option value=\"dosenSTIEM\">Dosen STIEM Pekalongan</option>";
					
					if($status=='mhsLuar')
					echo"<option value=\"mhsLuar\" selected>Mahasiswa Luar STIEM Pekalongan</option>";
						else echo"<option value=\"mhsLuar\">Mahasiswa Luar STIEM Pekalongan</option>";
					
					if($status=='dosenLuar')
					echo"<option value=\"dosenLuar\" selected>Dosen Luar</option>";
						else echo"<option value=\"dosenLuar\">Dosen Luar</option>";
					
					if($status=='lainnya')
					echo"<option value=\"lainnya\" selected>Lainnya</option>";
						else echo"<option value=\"lainnya\">Lainnya</option>";
echo"					
				  </select>
				</td>
			</tr>
			<tr>
				<td>Level </td>
				<td>&nbsp;
					<select name=\"level\" id=\"level\">
					<option value=\"\">-Pilih Disini-</option>";
					if($level=='1')
					echo"<option value=\"1\" selected>User</option>";
						else echo"<option value=\"1\">User</option>";
						
					if($level=='2')
					echo"<option value=\"2\" selected>Author</option>";
						else echo"<option value=\"2\">Author</option>";
						
					if($level=='3')
					echo"<option value=\"3\" selected>Editor</option>";
						else echo"<option value=\"3\">Editor</option>";
						
					if($level=='4')
					echo"<option value=\"4\" selected>Admin</option>";
						else echo"<option value=\"4\">Admin</option>";
echo"
				  </select>
				</td>
			</tr>
			<tr>
				<td>Aktivasi</td>
				<td>";
				if($aktivasi=='0')
				echo"<input type=\"radio\" name=\"act\" value=\"0\" checked>Tidak Aktif";
					else echo"<input type=\"radio\" name=\"act\" value=\"0\" >Tidak Aktif";
					echo"&nbsp;";
				
				if($aktivasi=='1')
				echo"<input type=\"radio\" name=\"act\" value=\"1\" checked>Aktif";
					else echo"<input type=\"radio\" name=\"act\" value=\"1\">Aktif";
echo"
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type=\"submit\" name=\"simpan\" value=\"SIMPAN\">
					<input TYPE='button' VALUE='BATAL' onClick='history.go(-1);'>
				</td>
			</tr>
		</table>
	</form>";
	}
	?>