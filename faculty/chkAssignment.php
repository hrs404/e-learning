<html>

<body>

<?php

include("main.php");
$u = $_GET['id'];

if($u==0)
{ ?>


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
}
else
{

	echo "<center><h2> View Assignment Answer Panel </h2></center>";

	include("../config.php");

	$qq = "select * from answer WHERE course='$cc'";

	$rr = mysql_query($qq) or die(mysql_error());

	$cc = mysql_num_rows($rr);

	if($cc > 0)
	{
		echo "<table border='1' width='100%' style='text-align:center;'>";
		echo "<tr>";
		echo "<th>Title</th><th> Submission Date </th><th> Student ID </th><th> View Answer </th>";
		echo "</tr>";
		while($row = mysql_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['asdate']."</td>";
			echo "<td>".$row['uname']."</td>";
			echo "<td> <a href='../student/".$row['file']."' target='_blank'> View </a> </td>";
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