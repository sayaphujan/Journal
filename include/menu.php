<?
include"../koneksi.php";
session_start();
?>
<head>
		<link rel="stylesheet" href="css/styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>						
	</head>
<body>
<?php
if($_SESSION[level]=='1'){?>
		<div id="wrapper">
			<ul class="menu">
				<li class="item2"><a href="#">Password</a>
					<ul>
						<li class="subitem1"><a href="main.php?v=change">Ganti Password</a></li>
					</ul>	
				</li>
				<li class="item3"><a href="#">Akun</a>
					<ul>
						<li class="subitem1"><a href="main.php?v=logout">Logout</a></li>
					</ul>	
				</li>
			</ul>
		</div>
<?php } elseif($_SESSION[level]=='2'){?>
<div id="wrapper">
			<ul class="menu">
				<li class="item1"><a href="#"> Jurnal</a>
					<ul>
						<li class="subitem1"><a href="main.php?v=inputJurnal">Input Jurnal </a></li>
						<li class="subitem2"><a href="main.php?v=listMain">Lihat Jurnal </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#">Password</a>
					<ul>
						<li class="subitem1"><a href="main.php?v=change">Ganti Password</a></li>
					</ul>	
				</li>
				<li class="item3"><a href="#">Akun</a>
					<ul>
						<li class="subitem1"><a href="main.php?v=logout">Logout</a></li>
					</ul>	
				</li>
			</ul>
		</div>
<?php } elseif($_SESSION[level]=='3'){?>
	<div id="wrapper">
	<ul class="menu">
		<li class="item1"><a href="#"> Jurnal</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=inputJurnal">Input Jurnal </a></li>
				<li class="subitem2"><a href="main.php?v=listMain">Lihat Jurnal </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Password</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=change">Ganti Password</a></li>
			</ul>	
		</li>
		<li class="item3"><a href="#">Akun</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=logout">Logout </a></li>
			</ul>
		</li>
	</ul>
</div>
<?php }elseif($_SESSION[level]=='4'){?>
<div id="wrapper">
	<ul class="menu">
		<li class="item1"><a href="#"> Jurnal</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=inputJurnal">Input Jurnal </a></li>
				<li class="subitem2"><a href="main.php?v=listMain">Lihat Jurnal </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">User</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=reg">Tambah User</a></li>
				<li class="subitem2"><a href="main.php?v=listMember">Lihat User</a></li>
			</ul>	
		</li>
		<li class="item2"><a href="#">Polling</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=poll">Edit Polling</a></li>
				<li class="subitem2"><a href="main.php?v=hasilAll">Lihat Hasil Polling</a></li>
			</ul>	
		</li>
		<li class="item3"><a href="#">Password</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=change">Ganti Password</a></li>
			</ul>	
		</li>
		<li class="item4"><a href="#">Akun</a>
			<ul>
				<li class="subitem1"><a href="main.php?v=logout">Logout</a></li>
			</ul>
		</li>
	</ul>
</div>
<?php } ?>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $(".menu > li > ul"),
	           menu_a  = $(".menu > li > a");
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass("active")) {
	            menu_a.removeClass("active");
	            menu_ul.filter(":visible").slideUp("normal");
	            $(this).addClass("active").next().stop(true,true).slideDown("normal");
	        } else {
	            $(this).removeClass("active");
	            $(this).next().stop(true,true).slideUp("normal");
	        }
	    });
	
	});
</script>
</body>