<?php
include 'database.php';
//1=mca 2=bca 3=both

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width"/>
<title>Abhyuday 3.0</title>
<!-- CSS Files-->
<link rel="shortcut icon" href="images/final.png" type="image/png"/>
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/homepage.css">
<link rel="stylesheet" href="stylesheets/skins/teal.css">
<link rel="stylesheet" href="stylesheets/responsive.css"> 
<link rel="stylesheet" href="stylesheets/neelworkcss.css">   

<script type="text/javascript">

        function ajfetch(file, column, table, id) {

            var xmlhttp = false;

            if (window.XMLHttpRequest) {

                xmlhttp = new XMLHttpRequest();
            }
            else {

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                     var1= xmlhttp.responseText;
                     callin(var1);
                }
            }
            xmlhttp.open("GET", file + "?id=" + id + "&table=" + table + "&column=" + column, false);
            xmlhttp.send();

        }
        var ajval;
    function callin(var1) 
	{
        ajval=var1;
    }

</script>
<script type="text/javascript">
    var all_valid_flag = new Array(4);
    var letters = /[A-Za-z -']$/;
    var alphanum = /^[a-zA-Z0-9]+$/i;
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
			document.getElementById(var2).style.color="red";
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
			document.getElementById(var2).innerHTML="Enter a mobile no ";
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
<script>

    
     var event_ids = Array();
     var evant_names = Array();



// js to create multiple student input boxes
     function textdisp(id) {
	 
			if(id=="")
			hide();
			else
			    unhide();  document.getElementById("txtlist").innerHTML = "<img src='images/loading_events.gif'/>";
            ajfetch('fetchdata.php', 'min', 'events', id);
            min = ajval;
            ajfetch('fetchdata.php', 'max', 'events', id);
            max = ajval;
           // alert(max + " " + min);
            document.getElementById("max").value = max;
            //document.getElementById("txtlist").innerHTML = min;
//            min = document.getElementById("txtlist").innerHTML;
//            ajfetch('fetchdata.php', 'max', 'events', id);
//            max = document.getElementById("txtlist").innerHTML;
           //var max = parseInt(ajfetch('fetchdata.php', 'max', 'events', id));
           
            var HTML = "<table ><th>SRNO</th><th>USN</th><th>NAME</th><th>EMAIL</th><th>PHONE NO</th>";
            for (var i = 2; i <= min; i++) {
                HTML += "<tr><td>" + i + "<font color='red'>*</font></td><td><input type='text' required name='usn" + i + "' onblur='validation(1,this.name)'><div id='div_usn" + i + "'></div></td><td><input type='text' required name='name" + i + "' onblur='validation(2,this.name)'><div id='div_name" + i + "' ></div></td><td><input type='text' name='email" + i + "' onblur='validation(3,this.name)'><div id='div_email" + i + "'></div></td><td><input type='text' name='phone" + i + "' onblur='validation(4,this.name)'><div id='div_phone" + i + "'></div></td></tr>";

        }
            for (var j = 1; j <= max-min; j++) {
                HTML += "<tr><td>" + i + "</td><td><input type='text' name='usn" + i + "' onblur='validation(1,this.name)'><div id='div_usn" + i + "'></div></td><td><input type='text' name='name" + i + "'onblur='validation(2,this.name)'><div id='div_name" + i + "'></div></td><td><input type='text' name='email" + i + "'onblur='validation(3,this.name)'><div id='div_email" + i + "'></div></td><td><input type='text' name='phone" + i + "'><div id='div_phone" + i + "'onblur='validation(4,this.name)'></div></td></tr>";
                i++;
            }
            HTML += "</table>";
            if (min > 1)
                document.getElementById("txtlist").innerHTML = HTML;
                else
                document.getElementById("txtlist").innerHTML = "* This is single participant event";
            
        }
    </script>

</head>
<body onload="hide(); ">
<!-- HIDDEN PANEL 
================================================== -->

<!-- HEADER
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
				 BCA / BSc REGISTRATION
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>

<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns">
    <form name="reg" action="regeister.svr.php" method="POST" onsubmit="return all_valid()">
    <fieldset>
        <legend>General Information </legend>
        <table>
            <tr>
                <td>
                    College Name <font color='red'>*</font>
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
                </td>
            </tr>
            <tr><td>Select Event<font color='red'>*</font></td>
            <td>
		<?php
        include 'database.php';

$sql="SELECT * FROM events WHERE category=1";

$result = $mysqli->query($sql);

if ($result->num_rows > 0)

{
    echo "<select name='events'  onchange='textdisp(this.value);' required>";
	echo "<option value=''>select</option>";
    while($row = $result->fetch_array()) {        
        echo "<option value='".$row['id'] . "'>" . $row['name'] . "</option>";
    }
    echo "</select>";
    
}
?>
            </td></tr>
			<tr>
                <td>
                    Team Leader USN / Reg-no<font color='red'>*</font></td>
                <td>
                    <input type="text" name="leaderusn" onblur="validation(1,this.name)" required="true">
					              
				</td>
                <td><div id="div_leaderusn"></div>  </td>
            </tr>
            <tr>
                <td>
                    Team Leader Name <font color='red'>*</font></td>
                <td>
                    <input type="text" name="leadernm" onblur="validation(2,this.name)" required="true">
					              
				</td>
                <td><div id="div_leadernm"></div>  </td>
            </tr>
            <tr>
                <td>
                    Team Leader Email ID <font color='red'>*</font></td>
                <td>
                    <input type="text" name="leaderid" onblur="validation(3,this.name)" required="true">
                </td>
                <td><div id="div_leaderid"></div>  </td>
            </tr>
            <tr>
                <td>
                    Team Leader Contact No.<font color='red'>*</font> 
                </td>
                <td>
                    <input type="text" name="leaderno" onblur="validation(4,this.name)" required="true">
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr>
        </table>
    </fieldset>
    <div id="member_reg" >
    <fieldset >
        <legend>Team Members Information </legend>
    



        <div id="txtlist">
        </div>
        <input id="submit_id" type="submit" name="add"/>
        </fieldset>
        </div>

         <input id="max" type="hidden" name="max" value="unknown">
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
<script>
    function hide() {
		
        document.getElementById("member_reg").style.visibility = "hidden";
        document.getElementById("submit_id").disabled = true;
    }
    function unhide() {
        document.getElementById("member_reg").style.visibility = "visible";
        document.getElementById("submit_id").disabled = false;
    }
    function all_valid() {
        for (io = 0; io < all_valid_flag.length; io++) {
            if (all_valid_flag[io] == false)
                return false;
        }
            return true;
        


    }
</script>
   
    
	
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