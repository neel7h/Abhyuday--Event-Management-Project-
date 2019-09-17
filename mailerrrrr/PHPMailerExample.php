<?php 

		$alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
		$pass = array();
		$alpha = strlen($alphabet) - 1 ;
		for($i =0;$i< 8;$i++)
		{
			$a = rand(0,$alpha);
			$pass[] = $alphabet[$a];
		}
		
		$password = implode($pass);
		
		
		
		$name='anil';
		$email='anilkumar7.gon@gmail.com';
		$designation='labour';
		
		
						//$to=$res['email'];
				$subject='Credentials for evaluating Student Report '; //Subject for the Email 
				require 'phpmailer/PHPMailerAutoload.php';

				$mail = new PHPMailer(true);

				//$mail->SMTPDebug = 3;           	                    // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'anilkumar7.gon@gmail.com';                 // SMTP username
				$mail->Password = 'gulgul7neel';                           // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    // TCP port to connect to

				$mail->setFrom('anilkumar7.gon@gmail.com', 'MCA Project Portal');
				$mail->addAddress($email);     // Add a recipient
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = $subject;
				$mail->Body    = "<h2>Dear Examiner </h2><br/><h3>Kindly find your UserID and Password for 6th semester project evaluation(MCA61)</h3><br/><h2>User ID : ".$res['email']."<br/>
				Password : ".$res['password']."</h2><br/>
				<h3>Kindly Find the link below to access the Portal</h3><h3> http://projevalmca.msrit.edu/portlogin.php </h3> <br/><h3>".$message."</h3><br/><h3>Regards : <br/> <br/>Dr. T V Suresh Kumar <br/>Professor and Head <br/>
				Department of Computer Applications <br/>M S Ramaiah Institute of Technology <br/>Bangalore - 560054 </h3><br/>";
				$mail->AltBody = $message;

				if(!$mail->send())      //Sending the mail and displaying the message if the mail has been sent
				{
					echo'<br/> <br/> <center> <h2>The details of the eaminer has been added but THE MAIL WAS NOT SENT..!! </h2> </center> <hr/>';
					echo"<center> <form action=\"go_to_add_externals.php\" method=\"post\"> <input type=\"submit\" value=\"   GO BACK   \"> </form> </center>";
				}
				else
				{
					echo'<br/> <br/> <center> <h2>The details of the eaminer has been added and the login credentials has been sent to the examiner. </h2> </center> <hr/>';
					echo"<center> <form action=\"go_to_add_externals.php\" method=\"post\"> <input type=\"submit\" value=\"   GO BACK   \"> </form> </center>";
				}
			
			
		
			 
	
	


?>

