<?php

 session_start();
 $u = $_SESSION['stuSession'];
 $cc = $_SESSION['stuCourse'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

?>