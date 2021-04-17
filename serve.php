<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="120">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
	body {
		background: url('computer2.png') center;
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
<ul>

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
<center>

<form method="post" action="serve1.php">
<center><div style="background-color: black; opacity: .8;width: 50%;float: center;
	height: 50%;margin-left:8%; ">
	
	<center><table class="table" style="margin-right: px;
">
		<thead>
			<tr>
				
				<th>SERVICE</th>
				<th> </th>
				<th> </th>
				<th>COST</th>
				<th> </th>
				<th> </th>
				<td></td>
				<th>SELECT</th>
				<th> </th>
				<th> </th>
				<th>SUBMIT ORDER</th>
				<td> </td>
				<td></td>
				</tr>
		</thead>
		<tr>
				
				<td>Operating system installations </td>
				<td></td>
				<td></td>
				<td>kshs 1000</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="os"></td>
				<td></td>
				<td></td>
				<td>0797684993</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Office Istallation</td>
				<td></td>
				<td></td>
				<td>kshs 500</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="Office"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Windows and Office Activation</td>
				<td></td>
				<td></td>
				<td>kshs 700</td>
				<td></td>
				<td></td>
				<td></td>
			<td><input type="checkbox" name="service" value="activation"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				
				<tr>
				
				<td>Other istallation </td>
				<td></td>
				<td></td>
				<td>kshs Varies</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="Other services"></td>
				<td></td>
				<td></td>
				<td>0797684993</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Software Repair and Maintenance</td>
				<td></td>
				<td></td>
				<td>kshs Varies</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="repair & Maintenance"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>DriverPacks Installation</td>
				<td></td>
				<td></td>
				<td>kshs 700</td>
				<td></td>
				<td></td>
				<td></td>
			<td><input type="checkbox" name="service" value="driver"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>

				<tr>
				
				<td>Online Services </td>
				<td></td>
				<td></td>
				<td>kshs Varies</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="online service"></td>
				<td></td>
				<td></td>
				<td>0797684993</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Virtual Assistance</td>
				<td></td>
				<td></td>
				<td>kshs Varies</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="virtual"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Web development</td>
				<td></td>
				<td></td>
				<td>kshs Varies</td>
				<td></td>
				<td></td>
				<td></td>
			<td><input type="checkbox" name="service" value="web"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				
				<tr>
				
				<td>Application Development</td>
				<td></td>
				<td></td>
				<td>kshs Varies</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="app development"></td>
				<td></td>
				<td></td>
				<td>0797684993</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Data recovery</td>
				<td></td>
				<td></td>
				<td>kshs 1000</td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="service" value="recovery"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Windows Password Bypassing</td>
				<td></td>
				<td></td>
				<td>kshs 1000</td>
				<td></td>
				<td></td>
				<td></td>
			<td><input type="checkbox" name="service" value="Password Bypassing"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				<tr>
				
				<td>Packages Training</td>
				<td></td>
				<td></td>
				<td>kshs 7000</td>
				<td></td>
				<td></td>
				<td></td>
			<td><input type="checkbox" name="service" value="Packages"></td>
				<td></td>
				<td></td>
				<td>0706851681</td>
				<td></td>
				<td></td>
				
				</tr>
				
</center>
</table>

</center>
</div></center><br><br>
<p style="color: black;">If the Service you want is not listed above, Ask here?</p><br>
<textarea name="clarification">State your request</textarea><br>
<input type="submit" name="Order" value="SUBMIT" style="color: green;">
<input type="Reset" name="reset" value="Reset">
</form>
<p style="color: blue;">WE OFFER ROOM FOR NEGOTIATION AND AND FREE CONSULTATION</p>

<center><footer width="50%" style="background-color: black; margin-left: 8%; margin-right: 8%; margin-top: 100%; margin-bottom: 4%; height: 50%;">

<p style="position: bottom; text-align: bottom;color: white;opacity: .8; "> &copy SKYTECHS TECHNOLOGIES.All rights Reserved. 
	 <?php echo date ('D') ?> <?php echo date ('d') ?> <?php echo date ('M') ?> <?php echo date('Y') ?> 
</p>
<p class="box"><a href="contactkibu.php" style="text-decoration: none; color: skyblue;text-indent: bottom;" align="right">CONTACT US</a></p>
</footer></center>
</body>

</html>