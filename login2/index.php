<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Smart Water Distribution</title>
	<!-- core CSS -->
	<link href="css/mycss.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/icon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<script src="js/slide.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	<style>
   </style>
</head>
<body>
<?php include("navbar.php");?>
<?php include("photo_slide.php");?>
<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <pre style="max-height:500px;">
					<h2 align="center">Water Supply Schedule</h2>
				    <table class="table table-bordered">
						  <thead>
							   <tr>
								<th width="2%"><font face="comic sans ms"><p align="center">Id</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Area</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Day</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Time</p></font></th>
							  </tr>
						   </thead>
						<tbody>
					</pre>
						
						<?php
						include("db_config.php");
						$q="select count(*) \"total\"  from schedule";
						$ros=mysqli_query($db,$q);
						$row=(mysqli_fetch_array($ros));
						$q="SELECT * FROM schedule";
						$ros=mysqli_query($db,$q);
						
						while($row=mysqli_fetch_array($ros))
						{
							echo '<tr>';
							echo '<td align=center>' . $row['id'];
							echo '<td align=center>' . $row['area'];
							echo '<td align=center>' . $row['days'];
							echo '<td align=center>' . $row['times'];
							echo '</tr>';
							
						}
						echo '</table>';
						echo  '</tbody>';
						echo '<br/>';
						
					   
					?>
                </div> 
				
				<div class="col-sm-6">
					<h2 align="center">Current News</h2>
						<div class="danger"><p width="100%"><?php
						$q="SELECT * FROM news where id=1";
						$ros=mysqli_query($db,$q);
						
						while($row=mysqli_fetch_array($ros))
						{
							echo $row['news'];
						}					   
					?></p></div>
					
					<div class="success"><p width="100%"><?php
						$q="SELECT * FROM news where id=2";
						$ros=mysqli_query($db,$q);
						
						while($row=mysqli_fetch_array($ros))
						{
							echo $row['news'];
						}					   
					?></p></div>
					
					<div class="info"><p width="100%"><?php
						$q="SELECT * FROM news where id=3";
						$ros=mysqli_query($db,$q);
						
						while($row=mysqli_fetch_array($ros))
						{
							echo $row['news'];
						}					   
					?></p></div>
                </div> 
            </div>
        </div>

    </section><!--/#cta-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			<p><h3 align="center">Register Complaint's<h3></p>
							<form method="POST" action="">
							<div class="form-group">
							  <input name="name" type="text" class="form-control" id="name" placeholder="Name">
							</div>
							
							<div class="form-group">
							  <input name="area" type="area" class="form-control" id="area" placeholder="Area Name">
							</div>
							
							<div class="form-group">
							  <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail">
							</div>
							
							<div class="form-group">
							  <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Mobile no.">
							</div>
							
							 <div class="form-group">
							  <textarea name="msg" class="form-control" rows="6" id="msg" placeholder="Message"></textarea>
							</div>
							
							<button type="submit" name="Submit" class="bt btn btn-info" value="Submit">Send Your Complaint</button>
					        </form>
<?php 
#include("db_config.php");
if (isset($_POST['Submit']))
	{
		$name=$_POST['name'];
		$area=$_POST['area'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$mobile=$_POST['mobile'];
		
		if($email==''){echo "<script>alert('Please enter E-Mail id')</script>>";exit();}
		if($name==''){echo "<script>alert('Please enter Name')</script>>";exit();}
		if($msg==''){echo "<script>alert('Please enter Message')</script>>";exit();}
		if($mobile==''){echo "<script>alert('Please enter Mobile Number')</script>>";exit();
	}
else
	{
		$query="insert into complaint(name,area,email,mobile,msg) values('$name','$area','$email','$mobile','$msg')";
			
		if(mysqli_query($db,$query))
		{
			echo "<script>alert('Complain Register Sucessfully')</script>";
		}
	}
}	 
mysqli_close($db);
?>
			</div>
			<div class="col-sm-6">
			<img src="images/logo.png" class="img-responsive" alt="logo">
			</div>
		</div>
	</div>
	<?php include("footer.php");?>
</body>
</html>
