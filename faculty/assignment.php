<?php include("main.php"); ?>
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
	xmlhttp.open("GET","chkAssignment.php?id="+str,true);
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
		<legend> <h2> Assignment Panel </h2> </legend>

		<input type="radio" name="r" value="0" onchange="a(this.value)"> Add Assignment <br>
		<input type="radio" name="r" value="1" onchange="a(this.value)"> View Assignment Answers <br>
		</fieldset>

		</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">

		<div id="me">

<fieldset style="width:700px;">
		<legend> <h2>  Add Assignment Panel  </h2> </legend>

	<form action="" method="post" enctype="multipart/form-data">

	<table style="width:700px;">

	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">&nbsp;</td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			&nbsp;Title For Assignment
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			<input type="text" name="t" style="width:500px;" class="style1">
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">  </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
	&nbsp;Upload an assignment File &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="f" class="style1"> 
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
		$t = $_POST['t'];
		move_uploaded_file($_FILES['f']['tmp_name'],"assign/".$_FILES['f']['name']);
		$path = "assign/".$_FILES['f']['name'];

		include("../config.php");
$d = date("d-M-Y");
$ss = mktime(0,0,0,date("m"),date("d")+15,date("y"));
$n = date("d-M-Y",$ss);

$q = "INSERT INTO assign (fid,course,idate,sdate,title,file) VALUES ('$u','$c','$d','$n','$t','$path')";

		$r = mysql_query($q) or die(mysql_error());

		if($r > 0)
		{
			echo "<script>alert('Assignment Successfully Added');</script>";
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