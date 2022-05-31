<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hall Reservation System</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="js/jquery.quicksand.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <div style="border:5px solid green;height:70px; width:870px;margin-top:-10px;margin-left:50px;">
	<h1 style="padding-top:10px;padding-left:12px;"><font color="yellow"><b>Hall Reservation System</b></font></h1>
    
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
			
			<li><a href="history.php">History</a></li>
			<li class="current"><a href="rates.php">Hall Rates</a></li>
            <li><a href="location.php">location</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li ><a href="admin_login.php">Admin Login</a></li>
			<li><a href="cancellation.php">Cancellation</a></li>
    	</ul>
		</div>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<ul class="portfolio-area" style=" padding:60px 0 20px 0;">
				
				<?php
				include('db.php');
				$result = mysql_query("SELECT * FROM internet_shop");
				while($row=mysql_fetch_assoc($result))
				{
					echo '<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">';
					echo '<div>
                    <span class="image-block">
					<a class="image-zoom" href="reservation/img/products/'.$row['img'].'" rel="prettyPhoto[gallery]" title="'.$row['name'].'"><img width="225" height="140" src="reservation/img/products/'.$row['img'].'" alt="'.$row['name'].'" title="'.$row['name'].'" />                    
                    </a>
                    </span>
                    <div class="home-portfolio-text">
					<h2 class="post-title-portfolio"><a href="#" rel="bookmark" title="'.$row['name'].'">'.$row['name'].'</a></h2>
                    <p class="post-subtitle-portfolio">Price: '.$row['price'].'</p>
					</div>
					</div>';
					echo '</li>';
				}
				?>
               	<div class="column-clear"></div>
            </ul>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div>
	<?php include("footer.php");?>
	</div>
</div>
</div>
</body>
</html>
