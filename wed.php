<?php

define('INCLUDE_CHECK',1);
require "connect.php";

function createRandomPassword() {
					$chars = "abcdefghijkmnopqrstuvwxyz023456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 7) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				$confirmation = createRandomPassword();
?>
<?php

	
	
	if(isset($_POST['back']))
{
	header("Location:../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hall Reservation System</title>


<link rel="stylesheet" type="text/css" href="demo.css" />

<!--[if lt IE 7]>
<style type="text/css">
	.pngfix { behavior: url(pngfix/iepngfix.htc);}
    .tooltip{width:200px;};
</style>
<![endif]-->


<script type="text/javascript" src="js/sadrag1.js"></script>
<script type="text/javascript" src="js/sadrag2.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script>


<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="main-container">
<div style="margin-left:-100px;margin-top:-10px;>
<input type="submit" <a href="#" onclick="history.back();"><font color="white" size="5"><b><< Back</b></font></a>

</div>
	<div class="tutorialzine">
    <h1>Catering services</h1>
    </div>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#241d1d;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #f5071f;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="page.php">Catering services</a></li>
  <li><a href="decoration.php">decoration</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
</html>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
<h2></h2>
<p></p>
	<div style="width:1000px; height:auto;">
		<div class="container" style="float: left; width: 1000px;">
		
			<span class="top-label">
				<span class="label-txt">catering</span>
			</span>
			
			<div class="content-area" style="border-radius:15px;">
		
				<div class="content drag-desired">
				<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
 <img src="th.jpg" class="" alt="" style="padding:4px;width:50%">
  <h2 style="margin-left:120px">Veg items </h2>
  <a href="veg.php"><img src="img/veg.jpg" class="w3-border" alt="Norway" style="padding:16px;width:45%;height:320px;float:left"></a>
  <h2 style="margin-top:-60px;float:right; margin-right:120px">Non-Veg items </h2>
  <a href="nveg.php"><img src="img/th (1).jpg" class="w3-border" alt="Norway" style="padding:16px;width:45%;height:320px;float:right"></a>
</div>

</body>
</html>

					

					
					
					<div class="clear"></div>
				</div>

			</div>
		</div>


		<form name="checkoutForm" method="post" action="order.php">
		<div class="container" style="float: left; width: 299px; margin-left: 12px;">
		
			

</body>
</html>
