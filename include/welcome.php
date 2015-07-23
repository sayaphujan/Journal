<?php
if($_SESSION[level]=='1'){
	$head='user';
} elseif($_SESSION[level]=='2'){
	$head='author';
}elseif($_SESSION[level]=='3'){
	$head='editor';
}elseif($_SESSION[level]=='4'){
	$head='administrator';
}
?>
<br>
<marquee behavior='alternate' bgcolor='#ff9801' ><h3><b>.::  <?php echo strtoupper($head); ?>  ::.. </b></h3></marquee>
<br><br><br>
<marquee behavior='scroll' direction='up' height='70%'><center><img src='../pict/stie.png'><center></marquee>