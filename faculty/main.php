<?php

 session_start();
 $u = $_SESSION['facSession'];
 $c = $_SESSION['facCourse'];
 $cc = $_SESSION['facCourse'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

?>