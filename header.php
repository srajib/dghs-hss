<?php    
$user_email=$_SESSION['email'];
$org = mysql_query("SELECT hss_organizations.title
FROM hss_organizations where hss_organizations.email='".$user_email."'");
$org_detail=mysql_fetch_array($org);	 ?>
<div id="header">
	
	<div class="container">			
		
		<div style="height:100px; width:auto;"><img src="img/logo.png" style="height:80px; width:95px; border:none"><font style="font-family:'Arial Black', Gadget, sans-serif; font-size:25px;position:relative; bottom:15px; color:#CCC">Health System Strengthening  </font><br>
<font style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px; left:95px; position:relative; bottom:40px; float:left; color:#CCC">Government of People's Republic of Bangladesh</font><br>
<font style="font-family:Arial, Helvetica, sans-serif; font-size:15px; left:95px; position:relative; bottom:42px;  color:#CCC"><b>Directorate General of Health Services</b></font></div>			
			
		
		<div id="info">				
			
			<a href="javascript:;" id="info-trigger">
				<i class="icon-cog"></i>
			</a>
			
			<div id="info-menu" style="margin-left:-350px">
				
				<div class="info-details" >
				
					<h5>Welcome <?php echo $org_detail['title']; ?>.</h5>
					
					<p>
						Logged in using <?php echo $user_email ;
					
						?>.
						<br>
						 <a href="logout.php">Logout</a>
					</p>
					
				</div> <!-- /.info-details -->
				
				 <!-- /.info-avatar -->
				
			</div> <!-- /#info-menu -->
			
		</div> <!-- /#info -->
		
	</div> <!-- /.container -->

</div> <!-- /#header -->

