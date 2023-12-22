<?php include("main.php"); ?>
<?php include("header1.php"); ?>
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

		<div id="me">

<fieldset style="width:700px;">
		<legend> <h2>  Send Assignments Answer Panel  </h2> </legend>

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
			&nbsp;Choose Assignment Title
	                </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
			<select name="t1" style="width:500px;" class="style1">
				<option> Choose Option </option>
				<?php
		include("../config.php");
		$q1 = "SELECT * FROM assign";
		$r1 = mysql_query($q1);
		while($row1 = mysql_fetch_array($r1))
		{
			echo "<option>".$row1['title']."</option>";
		}
				?>
			</select>
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
	&nbsp;Upload an assignment answer File &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="f" class="style1"> 
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
		<td style="width:100px;">&nbsp;</td>
                		<td style="width:500px;text-align:left;">
<?php
if(isset($_POST['s']))
{
	$title = $_POST['t1'];
	$date = date("d-M-Y");
	move_uploaded_file($_FILES['f']['tmp_name'],"answer/".$_FILES['f']['name']);
	$path = "answer/".$_FILES['f']['name'];

	$qq = "INSERT INTO answer (asdate,uname,file,title,course) VALUES ('$date','$u','$path','$title','$cc')";
	$rr = mysql_query($qq);
	if($rr > 0)
	{
		echo "<script>alert('Answer Successfully Submited');</script>";
	}
}
?>
	                 </td>
		<td style="width:100px;">&nbsp;</td>
	</tr>

	</table>
	</form>
</fieldset>

	<tr>
		<td style="width:130px;">&nbsp;</td>
		<td style="width:700px;">&nbsp;</td>
		<td style="width:130px;">&nbsp;</td>
	</tr>

	</table>
                            
        </div>

<?php include("footer.php"); ?>