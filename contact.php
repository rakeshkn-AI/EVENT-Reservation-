<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hall Reservation System</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <div style="border:5px solid green;height:70px; width:870px;margin-top:-10px;margin-left:50px;">
	<h1 style="padding-top:10px;padding-left:12px;"><font color="yellow"><b>Hall Reservation System</b></font></h1>
    
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
			
			<li><a href="history.php">History</a></li>
			<li><a href="rates.php">Hall Rates</a></li>
            <li><a href="location.php">location</a></li>
			<li class="current"><a href="contact.php">Contact Us</a></li>
			<li ><a href="admin_login.php">Admin Login</a></li>
			<li><a href="cancellation.php">Cancellation</a></li>
    	</ul>
		</div>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style=" padding:50px 0 20px 0;">	
				<div id="contactleft">
					<h3>Address</h3>
					<?php
					include('db.php');
					$result = mysql_query("SELECT * FROM address");
					while($row = mysql_fetch_array($result))
						{
							echo $row['address'];
						}
					?>
				</div><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="messageexec.php" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" required/>
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: abc@gmail.com" type="text" name="email" required/>
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" required/>
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5" required></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div>
	<?php include("footer.php");?>
	</div>
</div>
</body>
</html>
