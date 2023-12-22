<?php include("main.php"); ?>
<?php include("header1.php"); ?>
<?php include("header2.php"); ?>

        <div style="width:960px;height:300px;">
        
	<table style="width:960px;">

	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">&nbsp;</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">

		<div id="me">

<fieldset style="width:700px;">
		<legend> <h2>  View Assignment Panel  </h2> </legend>

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

		<?php

		include("../config.php");

		$qq = "select * from assign where course='$cc'";
		$rr = mysql_query($qq);
		$count = mysql_num_rows($rr);
		$co = 1;
		if($count > 0)
		{
			echo "<center><table border='1' style='width:500px;text-align:center;'>";
			echo "<tr>";
			echo "<th> S.No </th>";
			echo "<th> Title </th>";
			echo "<th> Submission </th>";
			echo "<th> Upload </th>";
			echo "</tr>";
			while($rows = mysql_fetch_array($rr))
			{
				echo "<tr>";
				echo "<td> ".$co." </td>";
				echo "<td> ".$rows['title']." </td>";
				echo "<td> ".$rows['sdate']." </td>";
				echo "<td> <a href='../faculty/".$rows['file']."' target='_blank'> View </a> </td>";
				echo "</tr>";
				$co++;
			}
			echo "</table></center>";
		}
		else
		{

		}

		?>

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
		$path = "upload/".$_FILES['f']['name'];

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
		<td style="width:700px;"> <b>Submit Answer here : </b><a href="submit.php"> assignment answer </a> </td>
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