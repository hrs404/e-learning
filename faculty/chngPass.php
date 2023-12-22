<?php include("main.php"); ?>
<?php include("header1.php"); ?>
<?php include("header2.php"); ?>

        <div style="width:960px;height:350px;">
        
	<table>

	<tr>

	<td style="width:130px;">&nbsp;</td>

	<td style="width:700px;">&nbsp;</td>	

	<td style="width:130px;">&nbsp;</td>

	</tr>

	<tr>

	<td style="width:130px;">&nbsp;</td>

	<td style="width:700px;border:1px solid gray;">	

	<div id="my" style="width:700px;">

		<center><h2> Change Password Panel </h2>

	<form method="post" action="">

		<table style="width:700px;400px;">	

		<tr>

			<td style="width:300px;">&nbsp;</td>
			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;</td>
		
		</tr>
		<tr>

			<td rowspan="8" style="margin-left:10px;margin-right:10px;">
				<img src="../images/1.jpg" width="280px" height="200px">
			</td>
			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;Old Password</td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;<input type="text" name="t1"></td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;New Password</td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;<input type="text" name="t2"></td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;Confirm Password</td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;<input type="text" name="t3"></td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;</td>
		
		</tr>
		<tr>

			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;<input type="submit" value="SUBMIT" name="s" style="width:120px;">
							<input type="submit" value="RESET" style="width:120px;"></td>
		
		</tr>
		<tr>

			<td style="width:300px;">&nbsp;</td>
			<td style="width:50px;">&nbsp;</td>
			<td style="width:350px;">&nbsp;</td>
		
		</tr>

		</table>

	<?php

	if(isset($_POST['s']))
	{

	$o = $_POST['t1'];
	$p = $_POST['t2'];
	$cp = $_POST['t3'];

	include("../config.php");

	$q = "select * from faculty where fid='$u'";
	$r = mysql_query($q);

	$c = mysql_num_rows($r);
	if($c>0)
	{
		if($row = mysql_fetch_array($r))
		{
			$a = $row['pass'];
		}
		
		if($a == $o)
		{
			$qq = "update faculty set pass='$p' where fid='$u'";

			$rr = mysql_query($qq);
			
			if($rr > 0)
			{
				echo "<script>alert('Password Updated Successfully');</script>";
			}
			else
			{
				echo "<script>alert('Error: Password Could not be update');</script>";
			}
		}
		else
		{
			echo "<script>alert('Error: OldPassword Not matched');</script>";
		}
	}
	else
	{
		echo "No Data to Display";
	}

	}

	?>
	</center>

	<br>

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