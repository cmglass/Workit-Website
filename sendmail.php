<?php
	$name=$POST['name'];
	$subject=$POST['subject'];
	$message=$POST['message'];
	$sendto"contact@workit-app.com";

	$content="from: $name \n" + $message;
	mail($sendto,$subject,$content);


echo"<html>
    <head>
        <meta http-equiv=\"refresh\" content=\"10;url=http://www.workit-app.com/\" />
    </head>
    <body style=\"background:#2c3d99\">
    	<div style=\" text-align:center; margin:auto;\">
    	<img src=\"Workit_logo_no_border.jpg\">
     	<div style=\"width:400px; text-align:center; margin:auto; background:#ffffff; padding:50px;\">
        	<h1>Feedback Submitted</h1>
        	<p>Thank you for your input.</p>
        </div>
    </body>
</html>";
?>