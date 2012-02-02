<?php
	$to = $_POST['to'];
        $subject = 'Bestelling';
	$subject = $_POST['subject'];
        $message = $_POST['getal1'] + $_POST['getal2'] + $_POST['getal3'];
	$message = $_POST['message'];
        $from='webmaster@webmaster-advanced.be';
	$from = $_POST ['from'];
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
	if($sent)
        {
        header("Location: http://localhost:8888/tussentijdseproef/index.php");
        }
        else
        {print "We encountered an error sending your mail";}
?>