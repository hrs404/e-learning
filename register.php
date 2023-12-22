<?php include("header.php"); ?>

        <div style="width:960px;height:550px;">
        
	 <table style="width:960px;">

	<tr>
		<td style="width:130px">&nbsp;</td>
		<td style="width:700px">&nbsp;</td>
		<td style="width:130px">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px">&nbsp;</td>
		<td style="width:700px">

<fieldset style="width:700px;border-color: rgb(218, 218, 218);">
	<legend style="font-size:30px;"> Registration Form </legend>
<form action="" method="post">                  
		<table style="width:700px;height:450px;">

		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">&nbsp;</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">&nbsp;</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">UserName</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
                                    <input class="style1" style="width:270px;" type="text" name="t1" />
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">Password</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
                                    <input class="style1" style="width:270px;" type="password" name="t2" />
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">Confirm Password</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
                                    <input class="style1" style="width:270px;" type="password" name="t3" />
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">&nbsp;</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">&nbsp;</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">Name</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
                                    <input class="style1" style="width:270px;" type="text" name="t4" />
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">Gender</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
                                    <input type="radio" name="t5" value="Male" /> Male
                                    <input type="radio" name="t5" value="Female" /> Female
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">Course</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
	               		<select name="t6" style="width:270px;" class="style1">
				<option> Select Course </option>
				<?php

				include("config.php");

				$q = "SELECT cname from course";
				$r = mysql_query($q) or die(mysql_error());

				while($row = mysql_fetch_array($r))
				{
			echo "<option>".$row['cname']."</option>";
				}
				?>
			</select>
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">Address</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
                                    		<textarea class="style1" name="t7" style="height:80px;">
                                    		</textarea>
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td colspan="3">
				<input type="checkbox" name="t8">
				I Accept all the terms and condition regarding the use of this website.
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:40px">&nbsp;</td>
			<td style="width:300px">
				<input type="submit" name="s" value="SUBMIT">
			</td>
			<td style="width:20px">&nbsp;</td>
			<td style="width:300px">
				<input type="reset" value="RESET" name="r">
			</td>
			<td style="width:40px">&nbsp;</td>
		</tr>
		</table>
</form>
<?php

if(isset($_POST['s']))
{

	if(isset($_POST['s']))
	{
		$u = $_POST['t1'];
		$p = $_POST['t2'];
		$cp = $_POST['t3'];
		$n = $_POST['t4'];
		$g = $_POST['t5'];
		$c = $_POST['t6'];
		$a = $_POST['t7'];
	
		$con = mysql_connect("localhost","root","");
		mysql_select_db("elearning",$con);

		$q = "INSERT INTO reg (uname,pass,cpass,name,gender,course,address) VALUES ('$u','$p','$cp','$n','$g','$c','$a')";
		$r = mysql_query($q);
		if($r > 0)
		{
			echo "<script>alert('Register Successfully')</script>";
		}
		else
		{
			echo "<script>alert('Could not register')</script>";
		}
	}
	else
	{
		echo "<script>alert('Plz check a check box')</script>";
	}
}

?>
		
	</fieldset>
		</td>
		<td style="width:130px">&nbsp;</td>
	</tr>
	<tr>
		<td style="width:130px">&nbsp;</td>
		<td style="width:700px">&nbsp;</td>
		<td style="width:130px">&nbsp;</td>
	</tr>

	</table>
        </div>

<?php include("footer.php"); ?>