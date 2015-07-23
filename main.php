<?php 
include"koneksi.php";
session_start();
session_is_registered('user');
include "include/lib.php";
include "include/topUser.php";
?>
<br><br><br><br><br>
<table width="85%" height="100%" border="0" align="center" bgcolor="#a1d4f6">
			<tr>
				<td valign="top" width="70%" >
					<?php
						$v = $_GET['v'];
						if($v == 'inputJurnal') {
							require_once "include/inputJurnal.php";
						} elseif ($v == 'logout') {
							require_once "include/logout.php";
						} elseif ($v == 'listMain') {
							require_once "include/listMain.php";
						}elseif ($v == 'listMember') {
							require_once "include/listMember.php";
						}elseif ($v=='change') {
							require_once "include/ganti_password.php";
						}else if($v=='find'){
							require_once"include/find.php";
						}else if($v=='reg'){
							require_once"include/daftar.php";
						}elseif($v == 'update') {
							require_once "include/updateJurnal.php";
						}elseif($v == 'updateMem') {
							require_once "include/updateMember.php";
						}elseif($v == 'list') {
							require_once "include/list.php";
						}elseif($v == 'listAll') {
							require_once "include/list - Copy.php";
						}elseif($v == 'comment') {
							require_once "include/komentar.php";
						}elseif($v == 'delete') {
							require_once "include/deleteJurnal.php";
						}elseif($v == 'deleteMem') {
							require_once "include/deleteMember.php";
						}elseif($v == 'poll') {
							require_once "include/inputPolling.php";
						}elseif($v == 'polling') {
							require_once "include/polling.php";
						}elseif($v == 'hasil') {
							require_once "include/hasil_polling.php";
						}elseif($v == 'hasilAll') {
							require_once "include/allPolling.php";
						}else if($v=='links'){
							require_once"include/links.php";
						}else{
							require_once"include/welcome.php";
							}
						
					?>
				</td>
				<td valign="top" >
					<?php require_once"include/cari.php";?>			
					<?php require_once"include/menu.php";?>				
				</td>
			</tr>
			<tr>
				<td colspan="2" background='../pict/tabOrange2.jpg'><hr style=width:100%>
					&nbsp; &nbsp; &copy; <?php echo date('Y') ?> || Sistem Informasi Jurnal by  Rain O Tsubasa
				</td>
			</tr>
		</table>