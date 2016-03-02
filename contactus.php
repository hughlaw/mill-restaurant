<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Restaurant and accommodation providing the highest quality food and experience based in Dunfanaghy, Co. Donegal." />
<meta name="keywords" content="restaurant, good food, accommodation, donegal, dunfanaghy, acommodation, B&#38;B dunfanaghy" />
<title>Contact Us - The Mill Restaurant, Dunfanaghy</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<link href="css/screen/mainStyleSheet.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="http://www.themillrestaurant.com/css/screen/IE.css" media="screen" />
<![endif]-->

</head>

<body>
<div id="container">
	<div id="header">
		<img src="images/header.jpg" alt="Header Image of restaurant and surrounding area" usemap="#Map" />
        <map name="Map" id="Map"><area shape="rect"  alt="Go back to home page" coords="354,35,595,119" href="/" /></map>	</div>
	<div id="navigation">
		<?php include 'navigation.php';	?>
	</div>
	<div id="mainContentContainer">
		<div id="leftColumn">
    		<h1>Contact Us</h1>
    		<p>You can use any of the below methods to get in contact with us, or fill in the form to send us an email directly</p>
				<fieldset>
    				<ul>
    					<label for="phone" class="addresslabels">Tel / Fax:</label>
    					<li id="phone"><a href="tel://+353749136985">+353 (0)74 913 6985<a></li>
    					<label for="address" class="addresslabels">Address:</label>
    					<li id="address">The Mill Restaurant<br />Susan &amp; Derek Alcorn<br />Dunfanaghy<br />Co. Donegal<br />Ireland</li>
    				</ul>
				</fieldset>


<!-- Start of Contact Form -->
<form action="sendmail.php">
	<fieldset>
    	<legend>Your Contact Details</legend>
        <ul>
        	<li>
            <label for="name">Name:</label>
            <input id="name" name="name" class="textfield" type="text" />
            </li>
            <li>
            <label for="email">Email Address:</label>
            <input id="email" name="email" class="textfield" type="text" />
            </li>
            <li>
            <label for="phone">Telephone Number:</label>
            <input id="phone" name="phone" class="textfield" type="text" />
            </li>
        	<li>
            <label for="comment">Comment or Question:</label>
        	<textarea name="comment" cols="50" rows="5" class="textfield" id="comment"></textarea>
            </li>
        </ul>
	</fieldset>

    <fieldset class="submit">
    	<input class="submit" type="submit" value="Send Email"  />
    </fieldset><br />
</form>

<!-- End of Contact Form -->

    	</div>
    <div id="rightColumn">
    <div align="left">
    <iframe width="455" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=115181840989460186947.00046f21e5f2222fd0392&amp;ll=54.977614,-7.855225&amp;spn=1.103395,2.197266&amp;z=8&amp;output=embed"></iframe><br /><p><a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=115181840989460186947.00046f21e5f2222fd0392&amp;ll=54.977614,-7.855225&amp;spn=1.103395,2.197266&amp;z=8&amp;source=embed" style="color:#0000FF;text-align:left">View a larger version of this map</a></p>
    <p>The Mill is situated at Dunfanaghy, in North West Donegal.</p>
    <p>From Letterkenny, take the N56, we are situated half a mile past the village on the right, at the shores of the new lake.<br /> You can use the interactive map to the right to see our exact location, marked by the blue pin.</p>
    <p>You can also get directions by clicking the blue pin and then selecting 'Get Directions to Here'</p>
    </div>
    </div>
    <div style="clear:both"></div>
    <div id="footer">
    <?php include 'footer.php';	?>
	</div>
</div>
</body>
</html>
