<?php

if(isset($_POST['s']))
{
	session_start();
	$c = $_POST['ch'];
	$u = $_POST['t1'];
	$p = $_POST['t2'];
		
	include("config.php");

	if($c == 0)
	{
		echo "<script>alert('Please select any Login Type')</script>";
	}
	else if($c == 1)
	{
		$q = "SELECT * FROM reg WHERE uname='$u' and pass='$p'";
		$r = mysql_query($q);
		
		$c = mysql_num_rows($r);
		if($c > 0)
		{
			if($row = mysql_fetch_array($r))
			{
				$course = $row['course'];
			}
			$_SESSION['stuSession'] = $u;
			$_SESSION['stuCourse'] = $course;
			header("Location: student/shome.php");
		}
		else
		{
			echo "<script>alert('UserId OR Password not matched')</script>";
		}
	}
	else if($c == 2)
	{
		$q = "SELECT * FROM faculty WHERE fid='$u' and pass='$p'";
		$r = mysql_query($q);
		
		$c = mysql_num_rows($r);
		if($c > 0)
		{
			if($row = mysql_fetch_array($r))
			{
				$course = $row['course'];
			}
			$_SESSION['facSession'] = $u;
			$_SESSION['facCourse'] = $course;
			header("Location: faculty/fhome.php");
		}
		else
		{
			echo "<script>alert('UserId OR Password not matched')</script>";
		}
	}
	else
	{
		$q = "SELECT * FROM admin WHERE uname='$u' and pass='$p'";
		$r = mysql_query($q);
		
		$c = mysql_num_rows($r);
		if($c > 0)
		{
			header("Location: admin/ahome.php");
		}
		else
		{
			echo "<script>alert('UserId OR Password not matched')</script>";
		}
	}
}

?>