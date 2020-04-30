<?php ob_start(); 

	echo "An error has occurred";
    $name = @trim(stripslashes(ucwords(strtolower($_POST['name'])))); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes(ucwords(strtolower($_POST['subject'])))); 
    $message = @trim(stripslashes($_POST['message'])); 
	
	$id = time();
	
	$headers = "From: zenithplus@zenithplus.org \r\n";
	$headers .= "Reply-To: ".$email." \r\n";
	$headers .= "CC: \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
    $email_to = "support@zenithplus.org, ewebstech@gmail.com";
	$subject = $subject;
    $body = "
			
		<html>
			<body>				
			<table cellpadding='10' border='0' width='500'>
			<tr style='background-color: rgba(204,0,0,1);'>
			<td width='30%' colspan='4' align='center'>
			<img src='https://www.zenithplus.org/images/zenithlogo.jpg' width='auto' height='100' />
			</td>
			
			</tr>
			
			<tr>
			<td style='color: #fff; background-color: rgba(204,0,0,1);' colspan='3' align='center'>Support Needed: $subject</td>
			</tr>
			<tr>
			<td style='color: #000; background-color: rgba(204,0,0,0.05)' colspan='3' align='left'>Hello Support, a member just contacted. Here are the details</td>
			</tr>
			<tr>
			<td width='30%' colspan='2' style='color: #000; background-color: rgba(204,0,0,0.05)' align='left'>
			Name:
			</td>
			<td width='70%' style='color: #000; background-color: rgba(204,0,0,0.05)' align='left'>
			$name
			</td>
			</tr>
			<tr>
			<td width='30%' colspan='2' style='color: #000; background-color: rgba(204,0,0,0.05)' align='left'>
			Message Subject:
			</td>
			<td width='70%' style='color: #000; background-color: rgba(204,0,0,0.05)' align='left'>
			$subject
			</td>
			</tr>
			<tr>
			<td width='30%' colspan='2' style='color: #000; background-color: rgba(204,0,0,0.05)' align='left'>
			Message Body:
			</td>
			<td width='70%' style='color: #000; background-color: rgba(204,0,0,0.05)' align='left'>
			$message
			</td>
			</tr>
			
			<tr>
			<td style='color: #fff; background-color: rgba(204,0,0,1)' colspan='3' align='center'>We hope you enjoy ZenithPlus</td>
			</tr>
			
			</table>
		</body>
		</html>
				
			";
			$suc = mail($email_to, $subject, $body, $headers);
			if(!$suc){
				echo"Error 090xx63";
			}
			else{
	$headers = "From: zenithplus@zenithplus.org \r\n";
	$headers .= "Reply-To: ".$email." \r\n";
	$headers .= "CC: \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
    $email_to = $email;
	$subject = "Hello $name, we just got your message";
    $body = "
			
		<html>
			<body>				
			<table cellpadding='10' border='0' width='500'>
			<tr style='background-color: rgba(204,0,0,1);'>
			<td width='30%' colspan='4' align='center'>
			<img src='https://www.zenithplus.org/images/zenithlogo.jpg' width='auto' height='100' />
			</td>
			
			</tr>
			
			<tr>
			<td style='color: #fff; background-color: rgba(204,0,0,1);' colspan='3' align='center'>We just recieved your concern/request</td>
			</tr>
			<tr>
			<td style='color: #000; background-color: rgba(204,0,0,0.05)' colspan='3' align='left'>Thank you $name for sending us a message. <br>
			Your request will be attended to soon by one of our customer care team.
			<br><br>
			Thanks for your time!

			<p>
			
			</td>
			</tr>
			<tr>
			<td style='color: #fff; background-color: rgba(204,0,0,1)' colspan='3' align='center'>We hope you enjoy ZenithPlus</td>
			</tr>
			
			</table>
		</body>
		</html>
				
			";
			$suc1 = mail($email_to, $subject, $body, $headers);
			if(!$suc1){
				echo"Error 090xx62";
			}
				
				header("location: contact.php?thanks=$name&success&mail=$id");
				
			}
		
