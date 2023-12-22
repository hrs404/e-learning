<?php include("main.php"); ?>
<?php include("header1.php"); ?>
<?php include("header2.php"); ?>

        <div style="width:960px;height:500px;">
        
                    <div style="width:300px;height:400px;float:left;text-align:left;margin-left:15px;">

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
        
                    <div style="width:635px;height:500px;float:left;padding-top:20px;">
                    
		<h1 style="text-align:left; padding-left:25px;"> Welcome in our website </h1>

		<p class="content">  Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website </p>

		<p class="content">  Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website Welcome in our website </p>

                    </div>



                            
        </div>

<?php include("footer.php"); ?>