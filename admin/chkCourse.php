<html>

<body>

<?php

$u = $_GET['id'];

if($u==0)
{ ?>

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

}
else
{

	echo "<center><h2> Delete Course Panel </h2></center>";

	include("../config.php");

	$qq = "select * from course";

	$rr = mysql_query($qq) or die(mysql_error());

	$cc = mysql_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%'>";
		echo "<tr>";
		echo "<th>Course Id</th><th> Course </th><th> Course Duration </th><th> &nbsp; </th>";
		echo "</tr>";
		while($row = mysql_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['cid']."</td>";
			echo "<td>".$row['cname']."</td>";
			echo "<td>".$row['duration']."</td>";
			echo "<td> <a href='delCourse.php?id=".$row['cid']."'> DELETE </a> </td>";			
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