<?php
include 'database.php';

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width"/>
<title>Abhyuday 4.0</title>
<!-- CSS Files-->
<link rel="shortcut icon" href="images/final.png" type="image/png"/>
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/homepage.css">
<link rel="stylesheet" href="stylesheets/skins/teal.css">
<link rel="stylesheet" href="stylesheets/responsive.css"> 
<link rel="stylesheet" href="stylesheets/neelworkcss.css">   
    <script src="js/jquery-2.1.0.js"></script>

	
	<script type="text/javascript">
    var letters = /[A-Za-z -']$/;
    var alphanum = /^[a-zA-Z0-9]+$/i;
	var all_valid_flag = new Array(4);
function validation(x,var1)
{
	var var2="div_"+var1;
	if (x == 1) {

	    if  (alphanum.test(document.getElementsByName(var1)[0].value)) {
	        document.getElementById(var2).innerHTML = "Correct";
	        document.getElementById(var2).style.color = "green";
	        all_valid_flag[0] = true;
	        //check=1;
	        //field1=field1+1;
	    }
	    else {
	        document.getElementById(var2).innerHTML = "Must be alphabets or numbers";
	        document.getElementById(var2).style.color = "red";
	        //field1=0;
            all_valid_flag[0] = false;
	    }
	}
	if(x==2)
	{
		
		if( (isNaN(document.getElementsByName(var1)[0].value)) && (letters.test(document.getElementsByName(var1)[0].value)) )
	    {
			document.getElementById(var2).innerHTML="Correct";
			document.getElementById(var2).style.color="green";
			all_valid_flag[1] = true;
					//check=1;
					//field1=field1+1;
		}
		else
		{
					document.getElementById(var2).innerHTML="Must be alphabets";
					document.getElementById(var2).style.color="red";
					//field1=0;
					all_valid_flag[1] = false;
		}
	}
	if(x==3) /*Validate eml Field*/
	{
	
		var x=document.getElementsByName(var1)[0].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			document.getElementById(var2).innerHTML="Enter a valid email id";
			document.getElementById(var2).style.color = "red";
			//field2=0;
			all_valid_flag[2] = false;
		}
		else
		{
			document.getElementById(var2).innerHTML="Correct";
			document.getElementById(var2).style.color="green";
			//field2=field2+1;
			all_valid_flag[2] = true;
		}		
	}
	if(x==4) 
	{
		//document.getElementById("mobileno").style.opacity="1";
		var lnthmno=parseInt(document.getElementsByName(var1)[0].value.length);
		if(lnthmno!=10  || (isNaN(document.getElementsByName(var1)[0].value)) )
		{
			document.getElementById(var2).innerHTML="Enter a mobile no only 10 digit allowed";
			document.getElementById(var2).style.color = "red";
			all_valid_flag[3] = false;
		}
			
		else
		{
			document.getElementById(var2).innerHTML="Correct";
			document.getElementById(var2).style.color = "green";
			all_valid_flag[3] = true;
		}
			
	}
}
</script>
<script type="text/javascript">
	
$(document).ready(function(){
    $('#course').on('change',function(){
        var data = $(this).val();

        if(data){
            $.ajax({
                type:'POST',
                url:'ajaxstu2.php',
                data:'id='+data,
                success:function(html){
					
                    $('#content1').html(html);
                    
                }
            }); 
        }else{
            $('#content1').html('<option value="">Select degree first</option>');
           
        }
    });

	
	
	
    
});
</script>
	
</head>
<body onload="hide();">
<!-- HIDDEN PANEL 
================================================== -->
<?php 
include 'head.php';
?>

<div class="clear">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p align="center">
				 TEAM REGISTRATION
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>
<center>

<!-- CONTENT 
================================================== -->
<div class="row">
	<form name="reg" onsubmit="return all_valid();" method="POST">
    <fieldset>
        <legend style="color:black;">General Information </legend>
        <table>
           <tr>
               <td>&nbsp;</td> 
               <td>&nbsp;</td> <td >
                    <b>College Name </b><font color='red'>*</font>
                </td>
                <td>
                    <?php
  $sql2 = "SELECT  * FROM college ORDER BY name";
                    if ($result2 = $mysqli->query($sql2)) {
                        if ($result2->num_rows > 0) {
                            echo "<select required name='college'>";
							echo "<option value=''>select</option>";
                            while($row = $result2->fetch_array()) {

                                echo "<option value='".$row['id'] . "'>" . $row['name'] . "</option>";

                            }
                            echo "</select>";
                            $result2->close();
                        } else {
                            echo "No records matching your query were found.";
                        }
                    }
                    // close connection
                    $mysqli->close();
                    ?>
					<br>
					<br>
					
                </td> </tr>
                   <tr><td colspan='2' ><b>Team Leader Email</b></td><td> <input type="text" name="leaderid1" onblur="validation(3,this.name)" required="true"><div id="div_leaderid1"></div>
					<td colspan='1'><b>Team Leader Phone no.</b></td><td>
                    <input type="text" name="leaderno1" required="true" onblur="validation(4,this.name)" ><div id="div_leaderno1"></div>
                </td>
               </tr>
			   			         <tr ><td><td><td colspan='' ><b>Select Degree</b><font color='red'>*</font></td>
					 
					<td "> <select name="course"  required id="course">
				
		<option value=''></option>
		<option value='mca'>MCA</option>
		<option value='bca'>BCA & BSc</option>
					<?php
					
        ?>
		  	
			</select></td>
			   <table><div id="content1">
			   
		
          <!--2-->
			</div>
			</table>
        </table>
    </fieldset>
    <div id="member_reg" >
    <fieldset >
        <legend style="color:Black">Team Members Information </legend>
    



        <div id="txtlist">
        </div>
        <input id="submit_id" type="submit" name="SUBMIT"/>
        </fieldset>
        </div>

    </form>
   	</div>
</div> 
<div class="hr">
</div>
<!-- FOOOTER 
================================================== -->
<?php 
include 'foot.php';
?>

</script>
 <?php
if(isset($_POST['SUBMIT']))
{
	global $string;
	 $string = rand(0, 9999999);
            $string="REF".$string;
global $leaderid;
$leaderid=$_POST['leaderid1'];
$phone=$_POST['leaderno1'];
$college=$_POST['college'];
$mysqli = new mysqli("localhost", "root", "", "abhyuday4_");
if ($mysqli === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql1="INSERT INTO headteam (email,phone,college,ref) values ('$leaderid','$phone','$college','$string')";
if($result1 = $mysqli->query($sql1)) {
	echo '<script language="javascript">';
echo 'alert("Your college team registered successfully team head check your mail for conformation and verification ")';
echo '</script>';
}
	for($i=2;$i<=18;$i++)
	{
$name=$_POST['leadernm'.$i];
$email=$_POST['leaderid'.$i];
$phone=$_POST['leaderno'.$i];
$event=$_POST['event'.$i];
echo($event);
$mysqli = new mysqli("localhost", "root", "", "abhyuday4_");
if ($mysqli === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql="INSERT INTO teamreg (name,email,phone,college,event,ref) values ('$name','$email','$phone','$college','$event','$string')";
if($result = $mysqli->query($sql)) {

$leader_incid=$mysqli->insert_id;
            
            // this must be removed later
            $title="data saved";

        }
        else
        {
            $message= "leader data not saved";
        }
	}
	$message_mail="<h2>Dear participant,</h2><br>Congratulations!!!!<p>Your college team successfully registered </b> ,you can avail an \"Team REGISTRATION offer\" by showing your reference code <b>$string</b> on the day of the event at registration desk.<br>we eagerly wait for your presence.Hope you enjoy your time at MSRIT!!!!</p>";// mail body
        //$message_mail="<h2>Dear participant,</h2><br>Congratulations!!!!<p>You have successfully registered for <b>$event_name</b> .<br>we eagerly wait for your presence . Hope you enjoy your time at MSRIT!!!!</p>";// mail body
        require "class.phpmailer.php"; //include phpmailer class
        
        // Instantiate Class  
        $mail = new PHPMailer();  
        
        // Set up SMTP  
        $mail->IsSMTP();                // Sets up a SMTP connection  
        $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
        $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
        $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
        $mail->Port = 465;  //Gmail SMTP port
        $mail->Encoding = '7bit';
        
        // Authentication  
        $mail->Username   = "msrit.abhyuday@gmail.com"; // Your full Gmail address
        $mail->Password   = "Abhyudayv4.0@msrit"; // Your Gmail passwordu
        
        // Compose
        $mail->SetFrom("msrit.abhyuday@gmail.com", "ABHYUDAY 4.0");//reply to emailid, name to display near subject
        $mail->AddReplyTo("msrit.abhyuday@gmail.com", "ABHYUDAY 4.0");// user can reply to this e mail
        $mail->Subject = "ABHYUDAY 4.0 @MSRIT";      // Subject (which isn't required)  
        $mail->MsgHTML($message_mail);
        
        // Send To  
        $mail->AddAddress($leaderid); // person who to send email, his name to display in sent items
        $result = $mail->Send();		// Send!  
        $sent = $result ? 'Successfully Sent!' : 'Sending Failed!';      
        unset($mail);
        if(!empty($sent)) echo $sent;
        
        //mail end
        
        
			
}


?> 		
   
    
	
	<script src="javascripts/foundation.min.js"></script>   
<script src="javascripts/jquery.easing.1.3.js"></script>
<script src="javascripts/elasticslideshow.js"></script>
<script src="javascripts/jquery.carouFredSel-6.0.5-packed.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>
</body>
</html>

  
