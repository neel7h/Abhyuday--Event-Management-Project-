<?php

include("database.php");
 if(isset($_POST["id"]) && !empty($_POST["id"])){
	 		$a=$_POST['id'];

if($a=='mca')
{
           echo('<tr><th>event id </th><th > Event Name <font color="red">*</font></th><th >  Name <font color="red">*</font></th><th >Email ID  <font color="red">*</font> </th><th>Contact No.<font color="red">*</font> </th>
			</tr>
			<!--2-->
			<tr><td rowspan="2"> 1</td><td><input type="text" readonly name="event2"  value="DOCTOR STRANGE(CODING & DEBUGGING)" style="border:none;  width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm2" onblur="validation(2,this.name)" required="true"><div id="div_leadernm2"></div></td>
				<td>
                    <input type="text" name="leaderid2" onblur="validation(3,this.name)" required="true" ><div id="div_leaderid2"></div>
                </td>

				<td>
                    <input type="text" name="leaderno2" onblur="validation(4,this.name)" required="true"><div id="div_leaderno2"></div>
                </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event3" readonly value="DOCTOR STRANGE(CODING & DEBUGGING)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm3" onblur="validation(2,this.name)" required="true"><div id="div_leadernm3" ></div></td>

				<td>
                    <input type="text" name="leaderid3" onblur="validation(3,this.name)"  required="true"><div id="div_leaderid3"></div>
                </td>

				<td>
                    <input type="text" name="leaderno3" onblur="validation(4,this.name)" required="true"><div id="div_leaderno3"></div>
                </td>
            </tr> 
			<!--2-->
			<tr><td rowspan="2"> 2</td><td><input type="text" readonly name="event4"  value="DARK REGION (WEB DESIGNING)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm4" onblur="validation(2,this.name)" required="true" ><div id="div_leadernm4"></div></td>
				<td>
                    <input type="text" name="leaderid4" onblur="validation(3,this.name)" required="true"  ><div id="div_leaderid4"></div>
                </td>
				<td>
                    <input type="text" name="leaderno4" onblur="validation(4,this.name)" required="true"><div id="div_leaderno4"></div>
                </td>
   
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event5" readonly value="DARK REGION (WEB DESIGNING)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td>
			<td> <input type="text" name="leadernm5" onblur="validation(2,this.name)" required="true"><div id="div_leadernm5"></div></td>
				<td>
                    <input type="text" name="leaderid5" onblur="validation(3,this.name)" required="true" ><div id="div_leaderid5"></div>
                </td>
				<td>
                    <input type="text" name="leaderno5" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno5"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td rowspan="2"> 3</td><td><input readonly type="text" name="event6"  value="CIVIL WAR(IT QUIZ)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm6" onblur="validation(2,this.name)" required="true"><div id="div_leadernm6"></div></td>
				<td>
                    <input type="text" name="leaderid6" onblur="validation(3,this.name)" required="true"><div id="div_leaderid6"></div>
                </td>
				<td>
                    <input type="text" name="leaderno6" onblur="validation(4,this.name)" required="true" ><div id="div_leaderno6"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event7" readonly value="CIVIL WAR(IT QUIZ)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> <td> <input type="text" name="leadernm7" onblur="validation(2,this.name)" ><div id="div_leadernm7"></div></td>
				<td>
                    <input type="text" name="leaderid7" onblur="validation(3,this.name)" required="true"><div id="div_leaderid7"></div>
                </td>
				<td>
                    <input type="text" name="leaderno7" onblur="validation(4,this.name)" required="true"><div id="div_leaderno7"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td rowspan="1"> 4</td><td><input type="text" readonly name="event8"  value="REALM OF KINGS(IT MANAGER)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				 <td> <input type="text" name="leadernm8" onblur="validation(2,this.name)" required="true" ><div id="div_leadernm8"></div></td>
				<td>
                    <input type="text" name="leaderid8" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid8"></div>
                </td>
				<td>
                    <input type="text" name="leaderno8" onblur="validation(4,this.name)" required="true"><div id="div_leaderno8"></div>  

                </td>
            </tr> 
			<!--2-->
			<tr> <tr><td rowspan="2"> 5</td><td><input type="text" readonly name="event9"  value="SECRET WARRIORS(VIRTUAL TREASURE HUNT)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm9" onblur="validation(2,this.name)" required="true"><div id="div_leadernm9"></div></td>
				<td>
                    <input type="text" name="leaderid9" onblur="validation(3,this.name)" required="true"><div id="div_leaderid9"></div>
                </td>
				<td>
                    <input type="text" name="leaderno9" onblur="validation(4,this.name)" required="true"><div id="div_leaderno9"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td><input type="text" name="event10"  readonly value="SECRET WARRIORS(VIRTUAL TREASURE HUNT)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				 <td> <input type="text" name="leadernm10" onblur="validation(2,this.name)" required="true"><div id="div_leadernm10"></div></td>
				<td>
                    <input type="text" name="leaderid10" onblur="validation(3,this.name)" required="true" ><div id="div_leaderid10"></div>
                </td>
				<td>
                    <input type="text" name="leaderno10" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno10"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="1"> 6</td><td><input readonly type="text" name="event11"  value="NEW MUTANTS(PHOTOGRAPHY & MOVIE MAKING")" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				<td> <input type="text" name="leadernm11" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm11"></div></td>
				<td>
                    <input type="text" name="leaderid11" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid11"></div>
                </td>
				<td>
                    <input type="text" name="leaderno11" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno11"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="1"> 7</td><td><input type="text" readonly name="event12"  value="EXTREMIS(JAM)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				<td> <input type="text" name="leadernm12" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm12"></div></td>
				<td>
                    <input type="text" name="leaderid12" onblur="validation(3,this.name)" required="true"><div id="div_leaderid12"></div>
                </td>
				<td>
                    <input type="text" name="leaderno12" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno12"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="2"> 8</td><td><input type="text" name="event13"  readonly value="DEADPOOL(MOCK IPL AUCTION)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm13" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm13"></div></td>
				<td>
                    <input type="text" name="leaderid13" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid13"></div>
                </td>
				<td>
                    <input type="text" name="leaderno13" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno13"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td><input type="text" name="event14"  value="DEADPOOL(MOCK IPL AUCTION)"  readonly style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				  <td> <input type="text" name="leadernm14" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm14"></div></td>
				<td>
                    <input type="text" name="leaderid14" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid14"></div>
                </td>
				<td>
                    <input type="text" name="leaderno14" onblur="validation(4,this.name)" required="true"><div id="div_leaderno14"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="2"> 9</td><td><input type="text" name="event15"  readonly value="FEAR ITSELF(TECHNICAL PRESENTATION)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm15" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm15"></div></td>
				<td>
                    <input type="text" name="leaderid15" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid15"></div>
                </td>
				<td>
                    <input type="text" name="leaderno15" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno15"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event16" readonly value="FEAR ITSELF(TECHNICAL PRESENTATION)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				  <td> <input type="text" name="leadernm16" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm16"></div></td>
				<td>
                    <input type="text" name="leaderid16" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid16"></div>
                </td>
				<td>
                    <input type="text" name="leaderno16" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno16"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> ');

 }
 if($a=='bca')
{
           echo('<tr><th>event id </th><th > Event Name <font color="red">*</font></th><th >  Name <font color="red">*</font></th><th >Email ID  <font color="red">*</font> </th><th>Contact No.<font color="red">*</font> </th>
			</tr>
			<!--2-->
			<tr><td rowspan="2"> 1</td><td><input type="text" readonly name="event2"  value="DOCTOR STRANGE(CODING & DEBUGGING)" style="border:none;  width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm2" onblur="validation(2,this.name)" required="true"><div id="div_leadernm2"></div></td>
				<td>
                    <input type="text" name="leaderid2" onblur="validation(3,this.name)" required="true" ><div id="div_leaderid2"></div>
                </td>

				<td>
                    <input type="text" name="leaderno2" onblur="validation(4,this.name)" required="true"><div id="div_leaderno2"></div>
                </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event3" readonly value="DOCTOR STRANGE(CODING & DEBUGGING)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm3" onblur="validation(2,this.name)" required="true"><div id="div_leadernm3" ></div></td>

				<td>
                    <input type="text" name="leaderid3" onblur="validation(3,this.name)"  required="true"><div id="div_leaderid3"></div>
                </td>

				<td>
                    <input type="text" name="leaderno3" onblur="validation(4,this.name)" required="true"><div id="div_leaderno3"></div>
                </td>
            </tr> 
			<!--2-->
			
			
			<!--2-->
			<tr><td rowspan="2"> 2</td><td><input readonly type="text" name="event4"  value="CIVIL WAR(IT QUIZ)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm4" onblur="validation(2,this.name)" required="true"><div id="div_leadernm4"></div></td>
				<td>
                    <input type="text" name="leaderid4" onblur="validation(3,this.name)" required="true"><div id="div_leaderid4"></div>
                </td>
				<td>
                    <input type="text" name="leaderno4" onblur="validation(4,this.name)" required="true" ><div id="div_leaderno4"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event5" readonly value="CIVIL WAR(IT QUIZ)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> <td> <input type="text" name="leadernm5" onblur="validation(2,this.name)" ><div id="div_leadernm5"></div></td>
				<td>
                    <input type="text" name="leaderid5" onblur="validation(3,this.name)" required="true"><div id="div_leaderid5"></div>
                </td>
				<td>
                    <input type="text" name="leaderno5" onblur="validation(4,this.name)" required="true"><div id="div_leaderno5"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td rowspan="1"> 3</td><td><input type="text" readonly name="event6"  value="REALM OF KINGS(IT MANAGER)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				 <td> <input type="text" name="leadernm6" onblur="validation(2,this.name)" required="true" ><div id="div_leadernm6"></div></td>
				<td>
                    <input type="text" name="leaderid6" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid6"></div>
                </td>
				<td>
                    <input type="text" name="leaderno6" onblur="validation(4,this.name)" required="true"><div id="div_leaderno6"></div>  

                </td>
            </tr> 
			<!--2-->
			<tr> <tr><td rowspan="2"> 4</td><td><input type="text" readonly name="event7"  value="SECRET WARRIORS(VIRTUAL TREASURE HUNT)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm7" onblur="validation(2,this.name)" required="true"><div id="div_leadernm7"></div></td>
				<td>
                    <input type="text" name="leaderid7" onblur="validation(3,this.name)" required="true"><div id="div_leaderid7"></div>
                </td>
				<td>
                    <input type="text" name="leaderno7" onblur="validation(4,this.name)" required="true"><div id="div_leaderno7"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td><input type="text" name="event8"  readonly value="SECRET WARRIORS(VIRTUAL TREASURE HUNT)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				 <td> <input type="text" name="leadernm8" onblur="validation(2,this.name)" required="true"><div id="div_leadernm8"></div></td>
				<td>
                    <input type="text" name="leaderid8" onblur="validation(3,this.name)" required="true" ><div id="div_leaderid8"></div>
                </td>
				<td>
                    <input type="text" name="leaderno8" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno8"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="1"> 5</td><td><input readonly type="text" name="event9"  value="NEW MUTANTS(PHOTOGRAPHY & MOVIE MAKING")" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				<td> <input type="text" name="leadernm9" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm9"></div></td>
				<td>
                    <input type="text" name="leaderid9" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid9"></div>
                </td>
				<td>
                    <input type="text" name="leaderno9" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno9"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> <!--2-->
			<tr> <tr><td rowspan="2"> 6</td><td><input readonly type="text" name="event10"  value="ULTIMATES(POSTER MAKING)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm10" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm10"></div></td>
				<td>
                    <input type="text" name="leaderid10" onblur="validation(3,this.name)" required="true"><div id="div_leaderid10"></div>
                </td>
				<td>
                    <input type="text" name="leaderno10" onblur="validation(4,this.name)" required="true"><div id="div_leaderno10"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event11" readonly value="ULTIMATES(POSTER MAKING)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				 <td> <input type="text" name="leadernm11" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm11"></div></td>
				<td>
                    <input type="text" name="leaderid11" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid11"></div>
                </td>
				<td>
                    <input type="text" name="leaderno11" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno11"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="1"> 7</td><td><input type="text" readonly name="event12"  value="EXTREMIS(JAM)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				<td> <input type="text" name="leadernm12" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm12"></div></td>
				<td>
                    <input type="text" name="leaderid12" onblur="validation(3,this.name)" required="true"><div id="div_leaderid12"></div>
                </td>
				<td>
                    <input type="text" name="leaderno12" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno12"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="2"> 8</td><td><input type="text" name="event13"  readonly value="DEADPOOL(MOCK IPL AUCTION)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm13" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm13"></div></td>
				<td>
                    <input type="text" name="leaderid13" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid13"></div>
                </td>
				<td>
                    <input type="text" name="leaderno13" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno13"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr><td><input type="text" name="event14"  value="DEADPOOL(MOCK IPL AUCTION)"  readonly style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				  <td> <input type="text" name="leadernm14" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm14"></div></td>
				<td>
                    <input type="text" name="leaderid14" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid14"></div>
                </td>
				<td>
                    <input type="text" name="leaderno14" onblur="validation(4,this.name)" required="true"><div id="div_leaderno14"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td rowspan="2"> 9</td><td><input type="text" name="event15"  readonly value="FEAR ITSELF(TECHNICAL PRESENTATION)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
			<td> <input type="text" name="leadernm15" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm15"></div></td>
				<td>
                    <input type="text" name="leaderid15" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid15"></div>
                </td>
				<td>
                    <input type="text" name="leaderno15" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno15"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> 
			<!--2-->
			<tr> <td><input type="text" name="event16" readonly value="FEAR ITSELF(TECHNICAL PRESENTATION)" style="border:none; width:380px; color:white; background:transparent;"  onblur="validation(2,this.name)" ></td> 
				  <td> <input type="text" name="leadernm16" onblur="validation(2,this.name)"required="true" ><div id="div_leadernm16"></div></td>
				<td>
                    <input type="text" name="leaderid16" onblur="validation(3,this.name)"required="true" ><div id="div_leaderid16"></div>
                </td>
				<td>
                    <input type="text" name="leaderno16" onblur="validation(4,this.name)"required="true" ><div id="div_leaderno16"></div>
                </td>
                <td><div id="div_leaderno"></div>  </td>
            </tr> ');

 }
 }
 
 ?>