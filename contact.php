<?php
	if(isset($_POST['submit'])){
	  require_once('mail.php');
		$sent = mail_sent($_POST);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Rowe</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="indexcss.css" type="text/css" media="screen" />
</head>

<body>

<div id="header"><h1>ROWE</h1></div>

<div id="container">

<ul id="nav">
	<li><a class="location" href="index.htm">Home</a></li>
  <li><a href="bio.htm">Bio</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>

<div id="content">
		<?php
		  if(isset($sent)){
			  if($sent){
				  echo '<h3>Thank you for your message</h3><p>We appreciate your comments and we will be sure to get back to you as soon as we can if you had any questions</p>';
				}
				else{
				  echo "<h3>We're sorry</h3><p>There was an error processing your request. Please try to contact us again with this form a little later.</p>";
				}
			}
			else{ 
    	  echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">'."\n";
		?>
<h2>Contact Rowe</h2>
	<p class="contact">Do you have any comments, questions or concerns? Just send us an e-mail and we'll get back to you as soon as we can. Thank you for your interest.</p>
	<fieldset>
		<!--<legend >Contact Information</legend>-->
		<div class="clear"><label for="name" >Name:</label><input id="name" name="name" type="text" /></div>
    <div class="clear"><label for="email">Email:</label><input id="email" name="email" type="text" /></div>
    <div class="clear"><label for="misc">Comments:</label><textarea id="misc" name="misc" rows="8" cols="25"></textarea></div>
  </fieldset>
  <fieldset>
    <div class="clear"><input id="submit" name="submit" value="Submit" type="submit" /></div>
  </fieldset>
</form>
</div><!--content-->

<div id="bottom">
<span class="left"><a href="http://www.3amproductions.net">another 3AM Production</a></span>
<a title="Validate as XHTML" rel="validate external" href="http://validator.w3.org/check?uri=http://www.shoprowe.com/index.htm"><abbr title="eXtensible Hypertext Markup Language"><acronym title="eXtensible Hypertext Markup Language">XHTML</acronym></abbr></a> |
<a title="Validate CSS" rel="validate external" href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.shoprowe.com/indexcss.css"><abbr title="Cascading Style Sheets"><acronym title="Cascading Style Sheets">CSS</acronym></abbr></a> | 
<a title="Validate as Section 508 Compliant" rel="validate external" href="http://www.contentquality.com/mynewtester/cynthia.exe?Url1=http://www.shoprowe.com/index.htm"><abbr title="Section 508"><acronym title="Section 508">508</acronym></abbr></a>
</div><!--bottom-->

</div><!--container-->

</body>

</html>