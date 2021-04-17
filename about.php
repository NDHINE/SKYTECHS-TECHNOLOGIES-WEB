<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="120">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
	body {
		background: url('computer2.png') center 50%;
		background-size: cover; 
		font-family: Ariel;
		color: white;
		
	}
	ul{
		margin: 0px;
		padding:0px;
		list-style: none;
	}
	ul li{
		float: left;
		width: 200px;
		height: 40px;
		background-color: black;
		opacity: .8;
		line-height: 40px;
		text-align: center;
		font-size: 20px;
		margin-right: 4px;
	}
	ul li a{
		text-decoration: none;
		color: white;
		display: block;
	
	}
	ul li a:hover{
		background-color:blue;

	}
ul li ul li{
	display:none;

}
ul li ul li:hover ul li ul li{
	display:block;
}
h1{
	background-color: ;
	font-size: 20px;
	color: blue;
}
h1:hover{
	opacity: .8;
	font-family: verdana;
	color: green;
}
p:hover{
	font-family: verdana;
	color:green;
}
fieldset{
	background-color: black;
	background-position: center;
	background-size: 50px;
	border-radius: 2px;
	opacity: .8;
	width: 50%;
	height: 50%;
}
label{
	color: white;
}
header, section, footer, aside, nav, main, article, figure {
  display: block;
}
footer, nav{
	padding: 10px;
	background-color: black;
}
footer, nav:hover{
	opacity: .8;
}

</style>
	<title>kibu technologies</title>
</head>
<body>
<header><marquee direction="right"><h1 COLOR="BLUE">SKYTECHS TECHNOLGIES</h1></marquee></header>
<nav>
<ul >

<li><a href="about.php">ABOUT</a>

</li>
<li><a href="goods.php">GOODS</a></li>
<li><a href="Services.php">SERVICES</a>

</li>
<li><a href="order.php">ORDER</a>

<li><a href="">BLOG</a>
</li>
<li><a href="contactkibu.php">CONTACT US</a></li>
</ul><br><br>
</nav><br />
<aside><a href="train.php" style="text-align: left;"><img src="kt.png" width="10%" height="10%"></a></aside>

<center><footer width="50%" style="background-color: black; margin-left: 8%; margin-right: 8%; margin-top: 100%; margin-bottom: 4%; height: 50%;">

<p style="position: bottom; text-align: bottom;color: white;opacity: .8; "> &copy SKYTECHS TECHNOLOGIES.All rights Reserved. 
	 <?php echo date ('D') ?> <?php echo date ('d') ?> <?php echo date ('M') ?> <?php echo date('Y') ?> 
</p>
<p class="box"><a href="contactkibu.php" style="text-decoration: none; color: skyblue;text-indent: bottom;" align="right">CONTACT US</a></p>
</footer></center>
</body>

</html>