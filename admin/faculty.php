<?php include("header1.php"); ?>

<script>

function a(str)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();	
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function ()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("me").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","chkFaculty.php?id="+str,true);
	xmlhttp.send();
}
</script>

<?php include("header2.php"); ?>

        <div style="width:960px;height:550px;">
        
	<table style="width:960px;">

	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">&nbsp;</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">

		<fieldset style="width:700px;">
		<legend> <h2> Faculty Panel </h2> </legend>

		<input type="radio" name="r" value="0" onchange="a(this.value)"> Add Faculty <br>
		<input type="radio" name="r" value="1" onchange="a(this.value)"> View/Delete Faculty <br>
		</fieldset>

		</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">

		<div id="me">

<fieldset style="width:700px;">
		<legend> <h2>  Add Faculty Panel  </h2> </legend>

	<form action="" method="post">

	<table style="width:700px;">

	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">&nbsp;</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;First Name
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<input type="text" name="t1" style="width:500px;" class="style1">
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;Last Name
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<input type="text" name="t2" style="width:500px;" class="style1">
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;Gender
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<input type="radio" name="t3" value=" Male"> Male
	               		<input type="radio" name="t3" value=" Female"> Female
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;Course
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<select name="t4" style="width:500px;" class="style1">
				<option> Select Course </option>
				<?php

				include("../config.php");

				$q = "SELECT cname from course";
				$r = mysql_query($q) or die(mysql_error());

				while($row = mysql_fetch_array($r))
				{
			echo "<option>".$row['cname']."</option>";
				}
				?>
			</select>
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;Contact
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<input type="text" name="t5" style="width:500px;height:50px;" class="style1">
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
		                &nbsp;<input style="width:120px;" type="submit" value="SUBMIT" name="s" class="style2">
                 	               &nbsp;<input style="width:120px;" type="reset" value="RESET" name="r" class="style2">
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
	                <td style="width:100px;text-align:center;">&nbsp;</td>
	                <td style="width:500px;text-align:left;">&nbsp;</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>

	</table>
	</form>

		</fieldset>

	<?php

	if(isset($_POST['s']))
	{

	$fn = $_POST['t1'];
	$ln = $_POST['t2'];
	$g = $_POST['t3'];
	$c = $_POST['t4'];
	$no = $_POST['t5'];

	include("../config.php");

	$q = "INSERT INTO faculty (fname,lname,gender,course,contact) VALUES ('$fn','$ln','$g','$c','$no')";

	$r = mysql_query($q) or die(mysql_error());

	if($r > 0)
	{
		echo "<script>alert('Faculty Successfully Added');</script>";
	}

	}
	?>
		</div>

		</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">&nbsp;</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>

	</table>
                            
        </div>

<?php include("footer.php"); ?>