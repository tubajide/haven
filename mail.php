<?php $mail = mail('ewebstech@gmail.com','Subject of the e-mail','This is the body of the e-mail!');
		if($mail){echo"Sent!"; } else { echo"Not Sent"; }
 ?>