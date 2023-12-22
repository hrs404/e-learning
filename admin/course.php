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
	xmlhttp.open("GET","chkCourse.php?id="+str,true);
	xmlhttp.send();
}
</script>

<?php include("header2.php"); ?>

        <div style="width:960px;height:400px;">
        
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
		<legend> <h2> Course Panel </h2> </legend>

		<input type="radio" name="r" value="0" onchange="a(this.value)"> Add Course <br>
		<input type="radio" name="r" value="1" onchange="a(this.value)"> View/Delete Course <br>
		</fieldset>

		</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">

		<div id="me">

<fieldset style="width:700px;">
		<legend> <h2>  Add Course Panel  </h2> </legend>

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
			&nbsp;Course Name
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<input type="text" name="t1" style="width:500px;">
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;Course Duration
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	               		<textarea name="t2" style="width:500px;"></textarea>
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
		                &nbsp;<input style="width:120px;" type="submit" value="SUBMIT" name="s">
                 	               &nbsp;<input style="width:120px;" type="reset" value="RESET" name="r">
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

	$a = $_POST['t1'];
	$b = $_POST['t2'];

	include("../config.php");

	$q = "INSERT INTO course (cname,duration) VALUES ('$a','$b')";

	$r = mysql_query($q) or die(mysql_error());

	if($r > 0)
	{
		echo "<script>alert('Course Successfully Added');</script>";
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