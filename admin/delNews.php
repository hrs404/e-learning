<?php

$u = $_GET['id'];

include("../config.php");

$q = "delete from newsTable where id='$u'";

$r = mysql_query($q);

if($r > 0)
{
	echo "<script>alert('Record Deleted Successfully');window.location='news.php';</script>";
}
else
{
	echo "<script>alert('Error: Record Could not be deleted');window.location='news.php';</script>";
}

?>