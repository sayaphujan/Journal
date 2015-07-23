<?php 
include"koneksi.php";
//function start lagi
session_start();
//cek apakah session terdaftar
if(session_is_registered('user')){
//session terdaftar, saatnya logout
session_unset();
session_destroy();
}
include "include/lib.php";
include "include/top.php";
?>
<br><br><br><br><br>
<table width="85%" height="100%" border="0" align="center" bgcolor="#a1d4f6">
<!--<div class="TableCart">
<table>-->
			<tr>
				<td width="50%" valign='top'>
					<?php
						$v = $_GET['v'];
						if ($v == 'reg') {
							require_once "include/daftar.php";
						} else if($v=='find'){
							require_once"include/findMain.php";
						} else if($v=='links'){
							require_once"include/links.php";
						} else if($v=='listAll'){
							require_once"include/list - Copy.php";
						}else if($v=='list'){
							require_once"include/list.php";
						}elseif($v == 'poll') {
							require_once "include/inputPolling.php";
						}elseif($v == 'polling') {
							require_once "include/polling.php";
						}elseif($v == 'hasil') {
							require_once "include/hasil_polling.php";
						}elseif($v == 'hasilAll') {
							require_once "include/allPolling.php";
						}else{
							require_once"include/front.php";
						}
					?>
				</td>
				<td width="20%" valign="top" >
					<?php require_once"include/cariMain.php";?>
					<?php require_once"include/login.php";?>
				</td>
			</tr>
			<tr>
				<td  colspan="2" background='../pict/tabOrange2.jpg'><hr style=width:100%>
					&nbsp; &nbsp; &copy; <?php echo date('Y') ?> || Sistem Informasi Jurnal by  Rain O Tsubasa
				</td>
			</tr>
		</table>