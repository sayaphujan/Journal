<html>
	<head>
		<title>.:: e-Jurnal ::.</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<style type="text/css">
body {
	overflow-x:hidden;
	overflow-y:scroll;
	margin:0;
	padding:0;
	color: #333;
	font: normal 0.6em sans-serif,Arial;
	background: url(pict/2.jpg);
	background-repeat: repeat-x repeat-y;
	background-attachment: fixed;
	background-color: #000;
	background-position: center top;
	width: 100%;
	height: 100%;
	
}
</style>
<style type="text/css">
.description {padding-left: 40px;}
h1 {
padding-left: 10px;
font: normal 18px Georgia, "Times New Roman", Times, serif;
}
</style>
<!--[if IE]>
<style type="text/css">.jimgMenu {position:relative;width:630px;height:200px;overflow:hidden;margin-left:20px;}</style>
<![endif]-->
<script type="text/javascript">
$(document).ready(function () {

  // find the elements to be eased and hook the hover event
  $('div.jimgMenu ul li a').hover(function() {
    
    // if the element is currently being animated (to a easeOut)...
    if ($(this).is(':animated')) {
      $(this).stop().animate({width: "310px"}, {duration: 450, easing:"easeOutQuad"});
    } else {
      // ease in quickly
      $(this).stop().animate({width: "310px"}, {duration: 400, easing:"easeOutQuad"});
    }
  }, function () {
    // on hovering out, ease the element out
    if ($(this).is(':animated')) {
      $(this).stop().animate({width: "78px"}, {duration: 400, easing:"easeInOutQuad"})
    } else {
      // ease out slowly
      $(this).stop('animated:').animate({width: "78px"}, {duration: 450, easing:"easeInOutQuad"});
    }
  });
});
</script>
	</head>
	<body>
		<div class='wrap'>
			<div class='header'>
				<div class='jimgMenu'>
				  <ul>
					<li class='landscapes'><a href='stie-muh.pkl.ac.id'>STIEM</a></li>
					<li class='people'><a href='index.php?v=listAll'>Jurnal</a></li>
					<li class='nature'><a href='index.php?v=links'>Links</a></li>
					<li class='abstract'><a href='index.php?v=hasilAll'>Polling</a></li>
					<li class='corporate'><a href='index.php'>Home</a></li>
				  </ul>
				</div>
			</div>
		</div>
<br class="clearfloat" />