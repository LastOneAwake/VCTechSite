<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$contact_name = $_POST['name'];
	$contact_email = $_POST['email'];
	$contact_message = $_POST['message'];
	
	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_message)){
	
		$to = 'ruben@rubenmelendez.me';
		$subject = 'Survey Submitted';
		$body = $contact_name."\n".$contact_email."\n".$contact_message;
		$headers = 'From: ' .$contact_email;
	
		
}
?>

<html>
<head>
    <title>Mail Sent! Thanks!</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="mailSent.css">
</head>
<body>
<div id="holder">
    <img src="images/Mail.png" alt="Mail Sent!">
</div>
<div id="text">


    <?php

    if(mail($to, $subject, $body, $headers)){
			echo "Your message has been sent!";
                        echo "<br>Hey thanks for letting us know what you think,";
                        echo "<br>We're really trying grow the club and your input is immensely helpful";
                        echo "<br>Click <a href='http://valenciatechclub.com'>here</a>to return to the club site";
		} else {
			echo "There was an error, probably the server having a good hiccup.";
                echo "<br>You can always email the head webguy directly at:";
                echo "<br><h2>Ruben@RubenMelendez.me</h2>";
        
		}
	
	} else {
		echo "Ooh,  something bad happened....even this text is ugly...I think so at least, dunno I'm just an automated response, I cant really know that.<br>But if you shoot an email to <h2>Ruben@RubenMelendez.me<h2> I'll have the dude take a look at it. Thanks!.";
	}


?>



</div>
</body>
</html>