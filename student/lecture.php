<?php include("main.php"); ?>
<?php include("header1.php"); ?>
<?php include("header2.php"); ?>

        <div style="width:960px;height:350px;">
        
                    <div style="width:300px;height:350px;float:left;text-align:left;margin-left:15px;">

	<center>
		<table border="0" style="margin-top:30px;width:230px;height:300px;" cellspacing="0" cellpadding="0">

		<tr>
			<td style="height:30px;">
				<img src="../images/news1.png">
			</td>
		</tr>
		<tr>
			<td style="height:240px;border-left:1px solid #C2C2C2;border-right:1px solid #C2C2C2;">

                <marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()">

		                <?php	
				include("../config.php");
			
				$q = "select * from newsTable";
			
				$r = mysql_query($q);
			
				$c = mysql_num_rows($r);
			
				if($c>0)
				{
					while($row = mysql_fetch_array($r))
					{
						echo "<label style='text-align:justify;'> * ".$row['news']."<br><hr><br></label>";			
					}
				}
				else
				{
					echo "No Data to Display";
				}
			
				?>
		</marquee>

			</td>
		</tr>
		<tr>
			<td style="height:30px;background-image:url('../images/news4.png');"></td>
		</tr>

		</table>
	</center>
                    
                    </div>
        
                    <div style="width:635px;height:350px;float:left;padding-top:20px;">
                    

		<center><h2> <?php echo $cc; ?> Lecture Panel </h2>

	<?php

	include("../config.php");

	$qq = "select * from lecture where course='$cc'";

	$rr = mysql_query($qq);

	$ccc = mysql_num_rows($rr);
	if($ccc>0)
	{
		echo "<table border='1' width='600px' style='text-align:center;'>";
		echo "<tr>";
		echo "<th>Title</th><th> Date </th><th> Faculty ID </th><th> View Lecture</th>";
		echo "</tr>";
		while($row1 = mysql_fetch_array($rr))
		{
			echo "<tr>";
			echo "<td>".$row1['title']."</td>";
			echo "<td>".$row1['ldate']."</td>";
			echo "<td>".$row1['fid']."</td>";
			echo "<td> <a href='../faculty/".$row1['file']."' target='_blank'> View </a> </td>";
			echo "</tr>";
		}
	}
	else
	{
		echo "No Data to Display";
	}

	?>
	</center>

	<br>

	</div>
                            
        </div>
