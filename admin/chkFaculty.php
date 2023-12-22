<html>

<body>

<?php

$u = $_GET['id'];

if($u==0)
{ ?>

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

}
else
{

	echo "<center><h2> Delete Course Panel </h2></center>";

	include("../config.php");

	$qq = "select * from faculty";

	$rr = mysql_query($qq) or die(mysql_error());

	$cc = mysql_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>Faculty Id</th><th> Name </th><th> Course </th><th> Contact </th>";
		echo "</tr>";
		while($row = mysql_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['fid']."</td>";
			echo "<td>".$row['fname']." ".$row['lname']."</td>";
			echo "<td>".$row['course']."</td>";
			echo "<td>".$row['contact']."</td>";
			echo "</tr>";
		}

	}
	else
	{
		echo "<script>alert('No data to display')</script>";
	}

}

?>

</body>

</html>